<?php
namespace MegaApp\Repository\ForumRepository;

class  ForumRepository implements ForumRepositoryInterface
{
	protected $user;
	protected $topic;
	protected $post;
	
	public function __construct($topic, $post)
	{
		$this->topic = $topic;
		$this->post = $post;	
	}
	
	public function setUser($user)
	{
		$this->user = $user;
		
	}
	 public function getTopicsList()
        {
                $topics = $this->topic->all();
		return $topics;                
        }

	 public function addNewTopic($title)
        {
                $userId = $this->user->id;
                $topic = $this->topic->newInstance();
                $topic->title = $title;
                $topic->user_id = $userId;
                $topic->save();
                return $topic;
        }	

	 public function getTopic($id)
        {
                $topic = $this->topic->find($id);
                $topic->visits++;
                $topic->save();
		return $topic;
        }

	 public function addNewPost($id, $msg)
        {
                $topic = $this->topic->find($id);
                $topic->posts_count++;
                $topic->save();
                $post = $this->post->newInstance();
                $userId =  $this->user->id;
                $post->message = $msg;
                $post->user_id = $userId;
                $post->topic_id = $topic->id;
                $post->save();
		return $post;
        }

	
}
