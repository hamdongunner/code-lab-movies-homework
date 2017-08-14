
@extends('layout.master')

@section('color')
    white
@endsection


@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-6 col-lg-offset-3 text-center">
                <h1 class="text-center" style="color: gold;">Do you have an acount</h1><br><br><br>

                @if($errors->count() >0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif

                <form class="panel panel-warning" method="post" action="/auth/login/request">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>


    </div>
@endsection

