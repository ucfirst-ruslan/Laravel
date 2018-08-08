<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});

Route::get('/', function (){
	$res = Artist::all();

	foreach ($res as $artist)
	{
		echo "<a href=\"/artist/$artist->ArtistId\">$artist->Name</a>".'<br>';
	}
});


Route::get('/artist/{id}', function ($id){
	$res = DB::table('Album')->where('ArtistId', $id)->orderBy('Title')->get();

	foreach ($res as $album)
	{
		echo "<a href=\"/album/$album->AlbumId\">$album->Title</a>".'<br>';
	}
});

//выводит список Треков (Track) в выбраном альбоме (+ название исполнителя).
Route::get('/album/{id}', function ($id){
	$res = Track::where('AlbumId', $id)->get();
echo "<pre>";
	var_dump($res);
	echo "</pre>";
	//var_dump($res['Track']);

	foreach ($res as $track)
	{
		echo "<pre>";
		var_dump( $track->Name);
		echo "</pre>";
	}
});



