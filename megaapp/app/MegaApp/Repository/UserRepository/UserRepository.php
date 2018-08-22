<?php

namespace MegaApp\Repository\UserRepository;


class UserRepository implements UserRepositoryInterface
{
	protected $user;

	public function __construct($user)
	{
		$this->user = $user;
	}

	public function postRegisterForm($nick, $email, $pass)
	{
		$user = $this->user->newInstance();
		$user->nickname = $nick;
		$user->email = $email;
		$user->password = \Hash::make($pass);
		$user->save();
		return $user;
	}

}