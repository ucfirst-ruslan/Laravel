<?php

Route::get('/', array('as' => 'artists', 'uses' =>'ArtistController@index'));

Route::get('/artist/{id}', array('as' => 'artist', 'uses' =>'ArtistController@show'));

Route::get('/album/{id}', array('as' => 'album', 'uses' =>'AlbumController@show'));

Route::get('/track/{id}', array('as' => 'track', 'uses' =>'TrackController@show'));
