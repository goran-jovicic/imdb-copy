@extends('layouts.master')

@section('content')

@foreach($genreMovies as $genreMovie)
<h1> {{$genreMovie->title}} </h1>
@endforeach

@endsection