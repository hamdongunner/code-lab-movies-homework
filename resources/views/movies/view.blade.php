
@extends('layout.master')

@section('color')
    black
@endsection

@section('content')
    <div class="container-fluid"">
        <div class="row">
            <div>

                <h1 class="text-center" style="color: whitesmoke">The {{$movie->name}} Movie</h1>
                <img src="{{$movie->image}}" class="img-responsive img-rounded">

            </div>
        </div>
<br>
    <div class="row">
        <h1 class="text-left" style="color: gold;">The Director: {{$movie->director->name}}</h1>
    </div>
    <div class="row">
        <div class="col-md-2">
            <h1 class="text-left" style="color: gold;">The Stars:</h1>
        </div>
        @foreach($actors as $actor)
            <div class="col-md-1">
              <h3 class="text-left" style="color: gold;"> {{$actor->name}}</h3>
            </div>
        @endforeach
        <br><br><br><br><br>



    </div>
        <div class="row">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <iframe width="854" height="480"
                            src="{{$movie->video}}" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>

        </div>
    <br><br><br><br><br>


    </div>

@endsection

