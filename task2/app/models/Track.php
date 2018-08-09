<?php


class Track extends Eloquent
{
	protected $table = 'Track';
	protected $primaryKey = 'TrackId';

	public function tracks()
	{
		return $this->hasManyThrough('Album', 'Artist', 'ArtistId', 'AlbumId');
	}
}