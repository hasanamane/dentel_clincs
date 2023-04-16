<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessTable extends Migration {

	public function up()
	{
		Schema::create('Business', function(Blueprint $table) {
			$table->increments('id');
			$table->time('Time');
			$table->string('description');
			$table->string('image');
			$table->integer('id_user')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Business');
	}
}