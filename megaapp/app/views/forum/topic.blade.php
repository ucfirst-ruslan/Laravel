@extends('layout.main')

@section('content')
<a href="{{URL::action('ForumController@getTopicsList')}}">Back to list</a>
<h1>{{$topic->title}}</h1>
@foreach($posts as $post)
<div class="post">
	<div class="post-head">
		<p>
			<span class="author">{{$post->user->nickname}}</span>
			<span class="ts">{{$post->created_at}}</span>
		</p>
	</div>
	<div class="post-body">
		<p>{{$post->message}}</p>
	</div>
</div>
@endforeach
<h2>New Post</h2>
<form method="POST" action="{{URL::action('ForumController@postNewPost', $topic->id)}}">
<textarea name="message"></textarea>
<button type="submit">Send</button>
</form>
@stop
