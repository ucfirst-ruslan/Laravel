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


/* Route::get('/db', function (){
	$sql = 'select * from Artist limit 1';
	$res = DB::select($sql);
	var_dump($res);
}); */

/* Route::get('/db', function (){
	$res = DB::table('Artist')->take(1)->get();
	var_dump($res);
}); */

/* Route::get('/db', function (){
	$res = DB::table('Artist')->where('Name', 'like', 'AC%')->get();
	var_dump($res);
}); */

/* Route::get('/db', function (){
	$res = Artist::where('name','Metallica')->first();
	var_dump($res->Name);
}); */

//Join
/* Route::get('/db', function (){
	$res = Artist::where('name','Metallica')->first();
	$albums = $res->albums;
	
	foreach ($albums as a$lbum)
	{
		echo $albom->Title;
	}
}); */

/* Route::get('/db', function (){
	$res = Album::find(10);
	var_dump($res);
	var_dump($res->artist->Name);
}); */

Route::get('/db', function (){
	$res = Album::find(10);
	var_dump($res);
	var_dump($res->artist->Name);
});