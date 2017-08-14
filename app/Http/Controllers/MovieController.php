<?php

namespace App\Http\Controllers;

use App\Coment;
use App\Movie;
use Illuminate\Http\Request;
use Auth;


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

    public function addComent($id,Request $request)
    {
        if(Auth::check()){
            if($request->coment != ""){
                $coment = new Coment();
                $coment->the_coment = $request->coment;
                $coment->movie_id = $id;
                $coment->save();
                return back();
            }
        }else{
            return redirect('/auth');
        }



    }

}
