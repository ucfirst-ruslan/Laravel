<?php

class SuperTopic extends Topic
{
	protected $table = 'topics';
	
	public function getTitleAttribute($value)
	{
		return strtoupper($value);
	}
}