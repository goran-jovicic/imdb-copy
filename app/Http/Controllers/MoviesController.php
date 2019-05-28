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
        $movie = Movie::with('comments')->FindOrFail($id);

        // $lastFiveMovies = Movie::latest()->limit(5);

        // SELECT * FROM `movies` order by created_at desc limit 5;

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
