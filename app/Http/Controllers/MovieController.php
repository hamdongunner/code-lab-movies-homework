<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getAll(Movie $movie)
    {
        $movies = Movie::all();
        return View('movies.movies',compact('movies'));
    }


    public function viewOne($id)
    {
        $movie = Movie::find($id);
        $actors = $movie->actors()->get();
        return View('movies.view',compact('movie','actors'));
    }


    public function add()
    {
        return View('movies.add');
    }


    public function adding(Request $request)
    {
        $movie = new Movie();
        $movie->name = $request->name;
        $movie->image = $request->image;
        $movie->video = $request->video;
        $movie->Director_id = 1;
        $movie->save();
        return redirect('/');
    }


    public function deleteOne($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/');
    }
}
