<?php

class TestController extends BaseController {
	
	public function showHello() {
		return 'Test!!!!!!!!!';
	}
	
	
	public function getForm(){
		return View::make('form', array('title'=>'Hello Form', 'element' =>array(1,2,3,4)));
	}
	
	
	public function postForm()
	{
		$name = Input::get('name');
		return "$name Ok";
	}
	
}