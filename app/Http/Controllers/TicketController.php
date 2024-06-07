<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::all();
        return view('ticket.index', ["ticket" => $ticket]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $film = Film::get();
        return view('ticket.add', ['film' => $film]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'seat_number' => 'required',
            'film_id' => 'required',

        ]);

        $ticket = new Ticket;

        $ticket->price = $request ['price'];
        $ticket->seat_number = $request ['seat_number'];
        $ticket->film_id = $request ['film_id'];

        $ticket->save();

        return redirect('/ticket');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);
        return view('ticket.show', ['ticket' => $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $ticket = Ticket::find($id);
         $film = Film::get();
         return view('ticket.edit', ['ticket' => $ticket, 'film' => $film]);   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'price' => 'required',
            'seat_number' => 'required',
            'film_id' => 'required',
        ]);

        $$ticket = Ticket::find($id);
        
        $$ticket->price = $request ['price'];
        $$ticket->seat_number = $requests ['seat_number'];
        $ticket->fim_id = $request ['film_id'];

        $$ticket->save();

        return redirect('/ticket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect('/ticket');
    }
}
