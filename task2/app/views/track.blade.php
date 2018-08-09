@extends('layout.main')

@section('title')
    {{$artist}}
    <h2 class="is-size-4">Album: {{$title}}</h2>
@stop


@section('content')
    <div class="alert alert-secondary" role="alert">
        @foreach ($datas as $data)

            <b>Title Song:</b> {{$data->Name}}<br>
            <b>Genre:</b> {{$genre}}<br>
            <b>Composer:</b> {{$data->Composer}}<br>
            <b>Duration:</b> {{date('i:s', (int)$datas[0]->Milliseconds/1000)}} Min<br>
            <b>Size:</b> {{round($datas[0]->Bytes /1024/1024, 2)}} MB<br>
            <b>Price:</b> ${{$datas[0]->UnitPrice}}<br>

        @endforeach
    </div>
@stop