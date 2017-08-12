<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    public function movies()
    {
        return $this->hasMany(Movie::Class,'Director_id','id');

    }


    public function actors()
    {
        return $this->belongsToMany(Actor::Class,'movies_actors_director','director_id','id');

    }
}
