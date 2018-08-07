@extends('layouts.master')

@section('title')
    Article page | {{$id}}
@stop

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h1>Article Page #{{$id}}</h1>
        </div>
    </div>

    <div class="alert alert-secondary" role="alert">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consectetur cumque distinctio, esse illum iure natus provident repellat temporibus ut! At ex fugit iusto libero, numquam quam quos? Adipisci amet, blanditiis culpa ducimus eius ipsa magnam magni nihil porro quos repellendus reprehenderit sit tenetur vero voluptatibus. Et fuga illo unde!</p>
    </div>
@stop