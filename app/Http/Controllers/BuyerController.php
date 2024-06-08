<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Buyer;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $buyers = Buyer::with('user')->get(); // Menggunakan eager loading untuk menghindari masalah N+1
        return view('buyer.index', compact('buyers'));
    }

    // public function index()
    // {
    //     $buyer = Buyer::all();
    //     return view('buyer.index', ["buyer"=> $buyer]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::get();
        return view('buyer.add', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'age' => 'required',
            'bio' => 'required|min:4',
            'users_id' => 'required',
        ]);
        $buyer = new Buyer;

        $buyer->age = $request->age;
        $buyer->bio = $request->bio;
        $buyer->users_id = $request->users_id;

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
