<?php


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/hello/{name?}', function($name = 'User')
{
	return "Hello, $name";
})->where('name', '[a-zA-Z]+');

Route::get('/hello/{name?}', function($name = 'User')
{
	return "Hello again, $name";
});


/* Route::get('/redirect', function(){
	return Redirect::to('http://google.com');
}); */

Route::get('/redirect', function(){
	return Redirect::route('form');
});

Route::get('/post-form', array('as'=>'form', 'uses'=>'TestController@getForm'));

Route::post('/test/form',array('as'=>'pform', 'uses'=>'TestController@showHello'));



Route::get('/test1', 'TestController@showHello');
Route::get('/test', 'HomeController@showTest');
