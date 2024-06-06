<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::all();
        return view('film.index', ["film" => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('film.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'synopsis' => 'required',
            'schedule' => 'required',
        ]);

        $film = new Film;

        $film->title = $request->title;
        $film->synopsis = $request->synopsis;
        $film->schedule = $request->schedule;

        $film->save();

        return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);
        return view('film.show', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::find($id);
        return view('film.edit', ['film' => $film]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'synopsis' => 'required',
            'schedule' => 'required',
        ]);

        $film = Film::find($id);
        
        $film->title = $request['title'];
        $film->synopsis = $request['synopsis'];
        $film->schedule = $request['schedule'];

        $film->save();

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::find($id);
        $film->delete();
        return redirect('/film');
    }
}
