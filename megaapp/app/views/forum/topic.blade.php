@extends('layout.main')
@section('title')
    {{$topic->title}}
@stop

@section('content')
    <div class="list">
        <div class="container">
        @foreach($posts as $post)
        <article class="flex-group" >
            <div class="nickname">{{$post->user->nickname}}</div>

            <div class="post-group">
                <div class="data-post">
                    <div class="date">{{$post->created_at->format('H:i d.m.y')}}</div>
                    <div class="like">
                        <span onclick="up({{$post->id}})" class="up">+</span>
                        <span id="likes{{$post->id}}">{{$post->like}}</span>
                        <span onclick="down({{$post->id}})" class="down">-</span></div>
                    </div>
                <div class="post">{{$post->message}}</div>
            </div>
        </article>
    @endforeach


    {{$posts->links()}}

    <div class="form">
        <form method="POST"
              action="{{URL::action('ForumController@postNewPost', $topic->id)}}">
            <label for="text-post">Add Post</label>
            <textarea id="text-post" name="message"></textarea>
            <div class="error">{{$errors->first('message') }}</div>
            <button type="submit">Add Post</button>
        </form>
    </div>
    </div>
    </div>
@stop
