@extends('layout.main')

@section('title')
    Artists List
@stop

@section('content')
    <div class="alert alert-secondary" role="alert">
        @foreach ($artists as $artist)
            <a href=/artist/{{$artist->ArtistId}}>{{$artist->Name}}</a><br>
        @endforeach
    </div>
@stop