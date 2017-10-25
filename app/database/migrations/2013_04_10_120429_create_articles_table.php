<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up() {
		Schema::create('articles', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->text('body')->nullable();
			$table->string('image')->nullable();
			$table->integer('user_id');
			$table->nullableTimestamps();
		});
	}

	public function down() {
		Schema::drop('articles');
	}

}
