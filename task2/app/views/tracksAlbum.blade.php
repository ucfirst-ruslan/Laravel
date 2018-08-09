@extends('layout.main')

@section('title')
    {{$artist}}
    <h2 class="is-size-4">{{$title}}</h2>
@stop


@section('content')
    <div class="alert alert-secondary" role="alert">
        @foreach ($tracks as $track)
            <a href={{URL::to('/track/')}}/{{$track->TrackId}}>{{$track->Name}}</a><br>
        @endforeach
    </div>
@stop