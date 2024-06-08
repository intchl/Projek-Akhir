<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use App\Models\DataBuyer;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buyers = Buyer::with('dataBuyer')->get();
        return view('buyer.index', ['buyers' => $buyers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataBuyers = DataBuyer::get();
        return view('buyer.add', ['dataBuyers' => $dataBuyers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'age' => 'required',
            'bio' => 'required',
            'data_buyers_id' => 'required',
        ]);

        $buyers = new Buyer;

        $buyers->age = $request['age'];
        $buyers->bio = $request['bio'];
        $buyers->data_buyers_id = $request['data_buyers_id'];

        $buyers->save();

        return redirect('/buyers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buyers = Buyer::with('dataBuyer')->find($id);
        return view('buyer.show', ['buyers' => $buyers]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buyers = Buyer::with('dataBuyer')->find($id);
        $dataBuyers = DataBuyer::get();
        return view('buyer.edit', ['buyers' => $buyers, 'dataBuyers' => $dataBuyers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'age' => 'required',
            'bio' => 'required',
        ]);

        $buyers = Buyer::find($id);

        $buyers->age = $request['age'];
        $buyers->bio = $request['bio'];

        $buyers->save();

        return redirect('/buyers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buyer = Buyer::find($id);
        $buyer->delete();
        return redirect('/buyers');
    }
}
