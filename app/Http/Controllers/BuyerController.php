<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buyer = Buyer::all();
        return view('buyer.index', ["buyer"=> $buyer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('buyer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required',
        ]);
        $buyer = new Buyer;

        $buyer->name = $request->name;
        $buyer->email = $request->email;

        $buyer->save();

        return redirect('/buyer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buyer = Buyer::find($id);
        return view ('buyer.show', ['buyer' => $buyer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buyer = Buyer::find($id);
        return view ('buyer.edit', ['buyer' => $buyer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required',
        ]);
        $buyer = Buyer::find($id);

        $buyer->name = request('name');
        $buyer->email = request('email');

        $buyer->save();
        return redirect('/buyer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buyer = Buyer::find($id);
        $buyer->delete();
        return redirect('/buyer');
    }
}
