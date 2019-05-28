@extends('layouts.master')

@section('title', $movie->title)

@section('content')
    <h1> {{$movie->title}}</h1>
    <p> {{$movie->genre}}</p>
    <p> {{$movie->production_date}}</p>
    <p> {{$movie->storyline}}</p>

@endsection

