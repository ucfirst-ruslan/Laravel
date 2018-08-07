<?php

class ContactUsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('ContactUs');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$name = Input::get('name');
		$mess = Input::get('message');

		if (!empty($name) && !empty($mess))
		{
			Session::flash('name', $name);

			return Redirect::to('thank-you');
		}

		return View::make('ContactUs', array('error' => 'You must fill in all fields'));
	}

}
