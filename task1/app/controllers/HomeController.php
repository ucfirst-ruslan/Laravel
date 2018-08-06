<?php

class HomeController extends BaseController {


	public function home()
	{
		return View::make('home');
	}
	
	public function showTest()
	{
		echo 'test!';		
	}
}
