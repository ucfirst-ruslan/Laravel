<?php
use \MegaApp\Repository\ForumRepository\ForumRepositoryInterface;

class ForumController extends BaseController
{
	protected $forumRepo;
	public function __construct(ForumRepositoryInterface $repo)
	{
		$this->beforeFilter('auth', array('except' => 'getTopicsList'));
		$this->forumRepo = $repo;
		$this->forumRepo->setUser(Auth::user());
	}
	public function getTopicsList()
	{
		$topics = $this->forumRepo->getTopicsList();	
		return View::make('forum.list', array('topics' => $topics));
	}

	public function postNewTopic()
	{
		$title = Input::get('title');
		$validator = Validator::make(array('title' => $title),
			array('title' => 'required|min:5'));
		if($validator->fails())
		{
			return Redirect::action('ForumController@getTopicsList')->withErrors($validator);
		}
		$this->forumRepo->addNewTopic($title);
		return Redirect::action('ForumController@getTopicsList');
	}
	
	public function getTopic($id)
	{
		$topic = $this->forumRepo->getTopic($id);
		$posts = $topic->posts()->paginate(3);
		return View::make('forum.topic', array('topic' => $topic, 'posts' => $posts));		
	}

	public function postNewPost($id)
	{
		$msg = Input::get('message');
		$post = $this->forumRepo->addNewPost($id, $msg);
		return Redirect::action('ForumController@getTopic', $id);
	}	
}
