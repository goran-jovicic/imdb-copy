<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = [
        'title', 'genre', 'production_date', 'storyline'
    ];

    const STORE_RULES = [
        'title' => 'required',
        'genre' => 'required',
        'production_date' => 'required',
        'storyline' => 'required | max:1000'
    ];
}
