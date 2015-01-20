@extends('master')

@section('head')
@section('head')

    <link rel="stylesheet" type="text/css" href="css/admindash.css">


@stop

@stop

@section('content')
<div class="container">
        <div class="jumbotron">
            <div class="well well-sm">
                <a href="/users/logout">Logout</a>
            </div>
            <h2>Roles Assigned:</h2>
            
            @foreach(Confide::user()->roles as $role)

                <h3><li>{{ $role->name }}</li></h3>

            @endforeach

        </div>
    </div>

@stop