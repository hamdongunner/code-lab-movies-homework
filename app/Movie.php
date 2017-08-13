<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function director()
    {
        return $this->belongsTo(Director::Class,'id','movie_id');
    }



    public function coments()
    {
        return $this->hasMany(Coment::Class,'movie_id','id');

    }
    public function actors()
    {
        return $this->belongsToMany(Actor::Class,'movies_actors_director','movie_id');

    }
}
