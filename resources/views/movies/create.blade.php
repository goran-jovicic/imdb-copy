@extends('layouts.master')

@section('title')
    Create new post
@endsection

@section('content')
<h1>Add a new movie</h1>
<form method="POST" action="{{route("store-movie")}}">
        {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
        @include ('partials.error-message', ['fieldTitle' => 'title'])
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" id="genre" name="genre">
        @include ('partials.error-message', ['fieldTitle' => 'genre'])
    </div>

    <div class="form-group">
        <label for="production_date">Year</label>
        <input type="number" id="production_date" name="production_date">
        @include ('partials.error-message', ['fieldTitle' => 'production_date'])
    </div>
    
    <div class="form-group">
        <label for="storyline">Storyline</label>
        <input type="text" id="storyline" name="storyline">
        @include ('partials.error-message', ['fieldTitle' => 'storyline'])
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit Post</button>
    </div>
</form>
@endsection
