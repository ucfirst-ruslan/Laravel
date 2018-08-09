@extends('layout.main')

@section('content')
<h1>Forums List</h1>
@foreach($topics as $topic)
<div>
<p class="topicstarter"><b>{{$topic->user->nickname}}</b> <i>{{$topic->updated_at}}</i></p>
<p><a href="{{URL::action('ForumController@getTopic', $topic->id)}}">{{$topic->title}}</a></p>
<p>Posts: {{$topic->posts_count}} Visits: {{$topic->visits}}</p>
</div>
@endforeach
@if(Auth::check())
<h2>Start new topic</h2>
<form method="POST" action="{{URL::action('ForumController@postNewTopic')}}">
<input type="text" name="title">
{{$errors->first('title') }}
<button type="submit">Start</button>
</form>
@endif
@stop
