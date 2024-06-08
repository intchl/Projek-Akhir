<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBuyer;

class DataBuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    public function index()
    {
        $databuyers = DataBuyer::all();
        return view('dataBuyers.index', ["dataBuyers" => $databuyers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataBuyers.add');
    }

    /**
     * Store a newly created resource in storname.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

        $databuyers = new DataBuyer;

        $databuyers->name = $request['name'];
        $databuyers->email = $request['email'];

        $databuyers->save();

        return redirect('/dataBuyers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $databuyers = DataBuyer::find($id);
        return view('dataBuyers.show', ['dataBuyers' => $databuyers]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $databuyers = DataBuyer::find($id);
        return view('dataBuyers.edit', ['dataBuyers' => $databuyers]);
    }

    /**
     * Update the specified resource in storname.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $databuyers = DataBuyer::find($id);

        $databuyers->name = $request['name'];
        $databuyers->email = $request['email'];

        $databuyers->save();

        return redirect('/dataBuyers')->with('success', 'Data Buyer updated successfully!');
    }



    /**
     * Remove the specified resource from storname.
     */
    public function destroy(string $id)
    {
        $databuyers = DataBuyer::find($id);
        $databuyers->delete();
        return redirect('/dataBuyers');
    }
}
