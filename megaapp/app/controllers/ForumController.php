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

	public function getTopic($id)
	{
		$topic = $this->forumRepo->getTopic($id);
		$posts = $topic->posts()->paginate(3);
		foreach ($posts as $key=>$post)
		{
			$like = Like::where('post_id', $posts[$key]->id)->sum('like');
			$posts[$key]->like = $like;
		}
		return View::make('forum.topic', array('topic' => $topic, 'posts' => $posts));
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

	public function postNewPost($id)
	{
		$msg = Input::get('message');
		$validator = Validator::make(array('message' => $msg),
			array('message' => 'required|min:10|max:5000'),
			array(
				'required' => 'Please enter :attribute'
			));
		if($validator->fails())
		{
			return Redirect::action('ForumController@getTopic', $id)->withErrors($validator);
		}
		$msg = nl2br(trim($msg));
		$post = $this->forumRepo->addNewPost($id, $msg);
		return Redirect::action('ForumController@getTopic', $id);
	}

	public function postLike()
	{
		$id = Request::json('id');
		$rate = Request::json('rate');

		$post = Post::find($id);
		$idUser = Auth::id();
		$like = Like::where('user_id', $idUser)->where('post_id', $post->id)->first();
		if(!$like)
		{
			$this->forumRepo->addLike($id, $rate);
		}
		//$this->forumRepo->addLike($id, $rate);
		echo (Like::where('post_id', $post->id)->sum('like'));
	}
}
