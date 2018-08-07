@extends('layouts.master')

@section('title')
    Thank You Page
@stop


@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h1>Thank You</h1>
        </div>
    </div>

    <div class="alert alert-success" role="alert">
        <p class="text-center">Спасибо, {{$name}}! / Thank You, {{$name}}!</p>
    </div>
@stop