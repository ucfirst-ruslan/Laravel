<?php
namespace MegaApp\Repository;

use Illuminate\Support\ServiceProvider;
use MegaApp\Repository\ForumRepository\ForumRepository;
use Topic;
use Post;
use App;
class RepositoryServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind('\MegaApp\Repository\ForumRepository\ForumRepositoryInterface', function() {
			return new ForumRepository(App::make('Topic'),App::make('Post'));
		});
	}
}
