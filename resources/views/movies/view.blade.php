
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
        <br><br><br><br><br><br>



    </div>
        <div class="row">

                <div class="col-md-8 col-md-offset-2 text-center">
                    <iframe width="854" height="480"
                            src="{{$movie->video}}" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
        </div>
    <br><br><br><br><br>
    <div class="row text-center" style="width: 100%">
        <div class="col-md-6 col-md-offset-3">
            <form class="panel panel-warning" method="post" action="/movie/coment/{{$movie->id}}/request">
                    {{csrf_field()}}
                    <div class="input-group">
                        <div class="input-group-addon"><button style="width: 20px;height:20px;color: black;" type="submit" class="btn btn-default text-center"></button></div>
                        <input name="coment" type="text" class="form-control" id="exampleInputAmount" placeholder="type here . . .">
                    </div>
                <table style="background-color: white" class="table table-responsive table-bordered">
                    @foreach($movie->coments as $coments)
                        <tr>
                            <th class="text-center">{{$coments->the_coment}}</th>
                        </tr>
                    @endforeach
                </table>
            </form>


</div>
<br><br><br><br><br><br>
</div>
</div>

@endsection

