<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
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
        $film = Film::all();
        return view('film.index', ["film" => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('film.add');
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
            'poster' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $film = new Film;

        $film->title = $request->title;
        $film->synopsis = $request->synopsis;
        $film->schedule = $request->schedule;

        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $posterName = time() . '.' . $poster->getClientOriginalExtension();
            $poster->move(public_path('images'), $posterName);
            $film->poster = $posterName;
        }

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
            'poster' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $film = Film::find($id);

        $film->title = $request['title'];
        $film->synopsis = $request['synopsis'];
        $film->schedule = $request['schedule'];

        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $posterName = $film->poster; // Retain the current name

            if ($posterName && file_exists(public_path('images/' . $posterName))) {
                unlink(public_path('images/' . $posterName));
            }

            $poster->move(public_path('images'), $posterName);
            $film->poster = $posterName;
        }

        $film->save();

        return redirect('/film')->with('success', 'Film updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::find($id);

        if ($film->poster && file_exists(public_path('images/' . $film->poster))) {
            unlink(public_path('images/' . $film->poster));
        }

        $film->delete();
        return redirect('/film');
    }
}
