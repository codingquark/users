@extends('master')

@section('head')
<style>
        body { background-color: #EEE; }
        .maincontent {
            background-color: #FFF;
            margin: 60px auto;
            padding: 20px;
            width: 300px;
            box-shadow: 0 0 20px #AAA;
        }
    </style>

@stop

@section('content')
<div class="maincontent">
        <h1>{{ Confide::user()->username }}</h1>
        <div class="well">
            <b>email:</b> {{ Confide::user()->email }}
            <br /> {{ Confide::user()->display(); }}
        </div>
     </div>

@stop