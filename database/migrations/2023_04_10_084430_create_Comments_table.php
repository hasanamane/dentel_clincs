<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('Comments', function(Blueprint $table) {
			$table->increments('id');
			$table->string('content');
			$table->time('Time');
			$table->integer('id_consulting')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Comments');
	}
}