
@extends('layout.master')

@section('color')
    white
@endsection


@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-6 col-lg-offset-3 text-center">
                <h1 class="text-center" style="color: gold;">Movies</h1>

                <table class="table table-responsive table-bordered">
                   @foreach($movies as $movie)
                    <tr>
                        <th>{{$movie->id}}</th>
                        <th>{{$movie->name}}</th>
{{--                        <th>{{$movie->director->name}}</th>--}}
                        <th class="text-center"><a href="/movie/view/{{$movie->id}}" class="btn btn-default">View</a>
                     </tr>
                     @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection

