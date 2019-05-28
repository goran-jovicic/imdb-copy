@extends('layouts.master')

@section('title', $movie->title)

@section('content')
    <h1> {{$movie->title}}</h1>
    <p> {{$movie->genre}}</p>
    <p> {{$movie->production_date}}</p>
    <p> {{$movie->storyline}}</p>
    @if(count($movie->comments))
        <h4>Comments:</h4>
            <ul>
                @foreach($movie->comments as $comment)
                <li>
                    <p>
                        {{ $comment->author }}
                    </p>

                    <p>
                        {{ $comment->content }}
                    </p>
                    
                    <p>
                        {{$comment->created_at}}
                    </p>
                </li>
                @endforeach
            </ul>
    @endif
@endsection

