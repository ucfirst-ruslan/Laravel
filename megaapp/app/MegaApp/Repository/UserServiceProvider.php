<?php

namespace MegaApp\Repository;

use Illuminate\Support\ServiceProvider;
use MegaApp\Repository\UserRepository\UserRepository;
//use Topic;
//use Post;
use App;

class UserServiceProvider  extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('\MegaApp\Repository\UserRepository\UserRepositoryInterface', function() {
			return new UserRepository(App::make('User'));
		});
	}

}



