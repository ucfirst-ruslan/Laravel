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

Route::get('/', function()
{
	return Redirect::action('ForumController@getTopicsList');
});
//Route::post('/like/{id}', array('as' => 'like', 'uses' =>'ForumController@postLike'));
Route::controller('/auth', 'AuthController');
Route::controller('/forum', 'ForumController');
Route::controller('/password', 'RemindersController');

