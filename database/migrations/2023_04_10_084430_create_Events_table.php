<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('Events', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Event');
			$table->time('Time');
			$table->integer('id_user')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Events');
	}
}