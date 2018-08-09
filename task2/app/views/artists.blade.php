@extends('layout.main')

@section('title')
    Artists List
@stop

@section('content')
    <div class="alert alert-secondary" role="alert">
        @foreach ($artists as $artist)
            <a href={{URL::to('/artist/')}}/{{$artist->ArtistId}}>{{$artist->Name}}</a><br>
        @endforeach
    </div>
@stop