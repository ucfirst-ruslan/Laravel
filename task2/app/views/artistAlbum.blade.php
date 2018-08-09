@extends('layout.main')

@section('title')
    "{{$artist->Name}}" Album List
@stop

@section('content')
    <div class="alert alert-secondary" role="alert">
        @foreach ($albums as $album)
            <a href={{URL::to('/album/')}}/{{$album->AlbumId}}>{{$album->Title}}</a><br>
        @endforeach
    </div>
@stop
