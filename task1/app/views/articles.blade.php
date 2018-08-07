@extends('layouts.master')

@section('title')
    Articles Page
@stop


@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h1>Articles Page</h1>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <ul class="list-group">
                @for ($i = 1; $i <= 5; $i++)
                    <li class="list-group-item"><a class="dropdown-item" href="{{{ URL::to('/article') }}}/{{ $i }}">Article {{ $i }}</a></li>
                @endfor
            </ul>
        </div>
        <div class="col-md-auto">
            <ul class="list-group">
                @for ($i = 6; $i <= 10; $i++)
                    <li class="list-group-item"><a class="dropdown-item" href="{{{ URL::to('/article') }}}/{{ $i }}">Article {{ $i }}</a></li>
                @endfor
            </ul>
        </div>
    </div>
@stop

