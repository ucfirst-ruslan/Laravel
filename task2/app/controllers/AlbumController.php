<?php


class AlbumController  extends BaseController
{

	public function show($id)
	{
		$tracks = Track::where('AlbumId', $id)->orderBy('TrackId')->get();
		$album = Album::find($tracks[0]->AlbumId);
		$artist = Artist::find($album->ArtistId);

		return View::make('tracksAlbum', array('tracks' => $tracks, 'artist'=>$artist->Name, 'title'=>$album->Title));
	}
}