<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTopics extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('visits')->unsigned()->default(0);
			$table->integer('posts_count')->unsigned()->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topics');
	}

}
