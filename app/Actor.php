<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function movies()
    {
        return $this->belongsToMany(Movie::Class,'movies_actors_director','actor_id');

    }

    public function directord()
    {
        return $this->belongsToMany(Director::Class,'movies_actors_director','actor_id','id');

    }

}
