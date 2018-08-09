<?php

class ArtistController  extends BaseController
{
	public function index()
	{
		$artists = Artist::all();
		return View::make('artists', array('artists' => $artists));
	}

	public function show($id)
	{
		$albums = Album::where('ArtistId', $id)->orderBy('Title')->get();
		$artist = Artist::find($id);

		return View::make('artistAlbum', array('albums' => $albums, 'artist'=>$artist));
	}
}