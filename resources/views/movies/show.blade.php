@extends('layouts.master')

@section('title', $movie->title)

@section('content')
    <h1> {{$movie->title}}</h1>
    <a href="/genres/{{$movie->genre}}"><p> {{$movie->genre}}</p></a>
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
    
    <h4> Post a comment</h4>

    <form method="POST" action="{{route('comments-movie', ['movie_id' => $movie->id])}}">
        @csrf

        <div class="form-group">
            <label for="content">Comment</label>
            <textarea class="form-control" id="content" name="content"></textarea>
            @include ('partials.error-message', ['fieldTitle' => 'content'])
        </div>

        <div class="form-control">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

