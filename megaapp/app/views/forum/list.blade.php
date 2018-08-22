@extends('layout.main')


@section('title')
    Topics List
@stop
@section('content')

    <div class="list">
        <div class="container">

            @foreach($topics as $topic)
                <article class="flex-group">
                    <div class="list-group">
                        <div class="data-topic">
                            <div class="nick">{{$topic->user->nickname}}</div>
                            <div class="date-list">{{$topic->updated_at}}</div>

                        </div>

                        <div class="topic">
                            <a href="{{URL::action('ForumController@getTopic', $topic->id)}}">{{$topic->title}}</a>
                        </div>
                    </div>

                    <div class="info-post">
                        <div>Posts: {{$topic->posts_count}}</div>
                        <div>
                            Visits: {{$topic->visits}}</div>
                    </div>
                </article>
            @endforeach


            @if(Auth::check())
                <div class="form">
                    <form method="POST"
                          action="{{URL::action('ForumController@postNewTopic')}}">
                        <label for="input-list">Title Topic</label>
                        <input id="input-list" type="text" name="title">
                        <div class="error">{{$errors->first('title') }}</div>
                        <button type="submit">Add Topic</button>
                    </form>
                </div>
            @endif


        </div>
    </div>


@stop
