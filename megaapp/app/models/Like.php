<?php


class Like extends Eloquent {

	public function post()
	{
		return $this->belongsTo('Post', 'post_id', 'id');
	}

	public function user()
	{
		return $this->belongsTo('User', 'user_id', 'id');
	}
}