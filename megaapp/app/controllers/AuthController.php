<?php



class AuthController extends BaseController {
	
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
								'nickname' =>'required|min:3|alpha_num|unique:users,nickname',
								'email'=>'required|email|unique:users,email',
								'password'=>'required|min:6'
							)
		)
		if($validator->fails())
		{
			return Redirect::action('AuthController@getRegisterForm')->withError($validator);
		}
		$user = new User;
		$user->nickname = $nick;
		$user->email = $email;
		$user->password = Hash::make($pass);
		$user->save();
		return Redirect::action('AuthController@getLoginForm');
	}
	
	public function postLoginForm()
	{
		$email = Input::get('email');
		$pass = Input::get('password');
		
		if(Auth::attempt(array('email'=>$email, 'password'=>$pass)))
		{
			return Redirect::to('/');
		}
		return View::make('auth.loginform', array('error'=>'Invalid login/password'));
		
	}
	
	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}