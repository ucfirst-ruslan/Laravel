<?php


class Genre extends Eloquent
{
	protected $table = 'Genre';
	protected $primaryKey = 'GenreId';

	public function genre()
	{
		return $this->belongsTo('Artist', 'ArtistId', 'ArtistId');
	}
}