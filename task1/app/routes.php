<?php

Route::get('/', function(){
	return Redirect::route('home');
});

Route::get('/home', array('as'=>'home', 'uses'=>'HomeController@home'));

Route::get('/articles', array('as'=>'articles', 'uses'=>'ArticlesController@index'));

/*Ресурс-контроллер. Небольшое читерство, но так будет более правильно*/
Route::resource('article', 'ArticleController', array('only' => array('index', 'show')));

Route::get('/about', 'AboutController@index');

Route::get('/contact-us', array('as'=>'ContactUs', 'uses'=>'ContactUsController@index'));

Route::post('/contact-us',array('as'=>'ContactUs', 'uses'=>'ContactUsController@store'));

Route::get('/thank-you', array('as' => 'ThankYouController', 'uses' =>'ThankYouController@index'));