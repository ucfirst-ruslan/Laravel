<?php

class ThankYouController extends \BaseController
{
	public function index()
	{
		if (Session::get('name'))
		{
			$name = Session::get('name');
		}

		return View::make('ThankYou', array('name' => $name));
	}
}