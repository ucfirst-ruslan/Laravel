<?php

namespace MegaApp\Repository\UserRepository;


interface UserRepositoryInterface
{
	public function postRegisterForm($nick, $email, $pass);
}