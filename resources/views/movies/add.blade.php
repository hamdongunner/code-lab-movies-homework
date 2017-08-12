
@extends('layout.master')

@section('color')
    white
@endsection


@section('content')

    <div class="container">
        <br > <br >
        <h1 class="text-center" style="color: gold;">Entering a New Movie</h1>
        <div class="row">
            <div class="col-md-4 col-lg-offset-4 text-center">
                <form class="panel panel-warning" method="post" action="/movie/add/request">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="  Enter the Title of the Movie">
                    <input type="text" class="form-control" name="image" id="exampleInputPassword1" placeholder="  Enter the movie Image (URL)">
                    <input type="text" class="form-control" name="video" id="exampleInputPassword1" placeholder="  Enter the movie Video (URL)">
                    <button type="submit" class="btn btn-default" style="width: 100%;background-color: gold">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
