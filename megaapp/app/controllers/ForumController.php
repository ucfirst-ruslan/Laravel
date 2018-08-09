<?php

class ForumController extends BaseController
{

	public function __construct()
	{
		$this->beforeFilter('auth', array('except' => 'getTopicsList'));
	}
	public function getTopicsList()
	{
		$topics = Topic::all();
		if($this->isRestRequest())
		{
			return Response::json($topics);
		}
		return View::make('forum.list', array('topics' => $topics));
	}

	public function postNewTopic()
	{
		$title = Input::get('title');
		$userId = Auth::id();
		$validator = Validator::make(array('title' => $title),
			array('title' => 'required|min:5'));
		if($validator->fails())
		{
			return Redirect::action('ForumController@getTopicsList')->withErrors($validator);
		}
		$topic = new Topic;
		$topic->title = $title;
		$topic->user_id = $userId;
		$topic->save();
		return Redirect::action('ForumController@getTopicsList');
	}
	
	public function getTopic($id)
	{
		$topic = Topic::find($id);
		$topic->visits++;
		$topic->save();
		$posts = $topic->posts;
		return View::make('forum.topic', array('topic' => $topic, 'posts' => $posts));		
	}

	public function postNewPost($id)
	{
		$topic = Topic::find($id);
		$topic->posts_count++;
		$topic->save();
		$post = new Post;
		$msg = Input::get('message');
		$userId =  Auth::id();
		$post->message = $msg;
		$post->user_id = $userId;
		$post->topic_id = $topic->id;
		$post->save();
		return Redirect::action('ForumController@getTopic', $topic->id);
	}	
	protected function isRestRequest()
	{
		return (Input::get('rest') == '1');		
	}
}
