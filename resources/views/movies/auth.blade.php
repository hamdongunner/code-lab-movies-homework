
@extends('layout.master')

@section('color')
    white
@endsection


@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-6 col-lg-offset-3 text-center">
                <h1 class="text-center" style="color: gold;">Do you have an acount</h1><br><br><br>
                    <form style="border: 100px;border-color: black;">
                        <div class="form-group">
                            <a href="/auth/rigester" class="btn btn-default">Rigester from here</a><br><br><br>
                        </div>
                        <div class="form-group">
                        <a href="/auth/login" class="btn btn-default">Login from here</a>
                        </div>
                    </form>
            </div>
        </div>


    </div>
@endsection

