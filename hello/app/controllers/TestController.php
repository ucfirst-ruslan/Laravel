<?php

class TestController extends BaseController {
	
	public function showHello() {
		return 'Test!!!!!!!!!';
	}
	
	
	public function getForm(){
		return View::make('form');
	}
	
	
	public function postForm()
	{
		$name = Input::get('name');
		return "$name Ok";
	}
	
}