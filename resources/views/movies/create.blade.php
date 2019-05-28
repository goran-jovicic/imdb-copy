<h1>Add a new movie</h1>
<form method="POST" action="{{route("store-movie")}}">
        {{ csrf_field() }}
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
    </div>

    <div>
        <label for="genre">Genre</label>
        <input type="text" id="genre" name="genre">
    </div>

    <div>
        <label for="production_date">Year</label>
        <input type="number" id="production_date" name="production_date">
    </div>
    
    <div>
        <label for="storyline">Storyline</label>
        <input type="text" id="storyline" name="storyline">
    </div>

    <div>
        <button type="submit">Submit Post</button>
    </div>
</form>

