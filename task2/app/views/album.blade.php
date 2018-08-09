@extends('layout.main')

@section('title')
    "{{$artist}}"
@stop

@section('content')
    <div class="alert alert-secondary" role="alert">
        @foreach ($albums as $album)
            <a href={{URL::to('/track/')}}/{{$album->AlbumId}}>{{$album->Title}}</a><br>
        @endforeach
    </div>
@stop


