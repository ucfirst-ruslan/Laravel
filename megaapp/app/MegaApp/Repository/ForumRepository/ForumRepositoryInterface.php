<?php

namespace MegaApp\Repository\ForumRepository;

interface  ForumRepositoryInterface
{
	public function setUser($user);

	public function getTopicsList();

	public function getTopic($id);

	public function addNewTopic($title);

	public function addNewPost($id, $msg);

	public function addLike($id, $rate);
}

