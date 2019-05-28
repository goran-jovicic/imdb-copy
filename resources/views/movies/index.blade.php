@foreach ($movies as $movie)
    <a href="/movies/{{$movie->id}}"><h1>{{$movie->title}}</h1></a>
    <p>{{$movie->storyline}}</p> 
@endforeach

    