<?php

use \MegaApp\Repository\UserRepository\UserRepositoryInterface;

class AuthController extends BaseController {

	protected $userRepo;
	public function __construct(UserRepositoryInterface $repo)
	{

		$this->userRepo = $repo;

	}

	public function getRegisterForm()
	{
		return View::make('auth.registerform');
	}

	public function getLoginForm()
	{
		return View::make('auth.loginform');
	}

	public function postRegisterForm()
	{
		$nick = Input::get('nickname');
		$email = Input::get('email');
		$pass = Input::get('password');
		$validator = Validator::make(Input::all(),
			array(
				'nickname' => 'required|min:3|alpha_num|unique:users,nickname',
				'email' => 'required|email|unique:users,email',
				'password' => 'required|min:6'
			),
			array(
				'required' => 'Please enter :attribute',
				'nickname.required' => 'Nickname should be specified'
			));
		if($validator->fails())
		{
			return Redirect::action('AuthController@getRegisterForm')->withErrors($validator);
		}
		$user = $this->userRepo->postRegisterForm($nick, $email, $pass);
		return Redirect::action('AuthController@getLoginForm');
	}

	public function postLoginForm()
	{
		$email = Input::get('email');
        $pass = Input::get('password');
		//dd ($pass);
		if(Auth::attempt(array('email' => $email, 'password' => $pass))) 
		{
			return Redirect::intended();
		}
		
		return View::make('auth.loginform', array('error' => 'Invalid login/pass'));

	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}
