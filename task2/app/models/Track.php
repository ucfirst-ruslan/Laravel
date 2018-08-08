<?php


class Track extends Eloquent
{
	protected $table = 'Track';
	protected $primaryKey = 'TrackId';

	public function albums()
	{
		return $this->belongsTo('Album', 'ArtistId', 'ArtistId');
	}
}