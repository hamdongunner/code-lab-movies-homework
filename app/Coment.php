<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{

    public function movie()
    {
        return $this->belongsTo(Movie::Class,'movie_id','id');
    }
}
