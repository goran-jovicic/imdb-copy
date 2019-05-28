<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::FindOrFail($id);

        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store()
    {
        $this->validate(request(), Movie::STORE_RULES);

        $movie = Movie::create(request()->all());
        // \Log::info($movie);
        
        return redirect()->route('all-movies');
    }
}
