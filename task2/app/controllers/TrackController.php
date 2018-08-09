<?php


class TrackController extends BaseController
{
	public function show($id)
	{
		$datas = Track::where('TrackId', $id)->get();
		$album = Album::find($datas[0]->AlbumId);
		$artist = Artist::find($album->ArtistId);
		$genre = Genre::find($datas[0]->GenreId);

		return View::make('track', array('datas' => $datas, 'artist'=>$artist->Name, 'title'=>$album->Title, 'genre'=>$genre->Name));
	}
}