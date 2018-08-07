<?php

class ArticleController extends \BaseController
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if($id > 0 && $id < 11)
		{
			return View::make('article', array('id' => $id));
		}
		return View::make('404');
	}


}
