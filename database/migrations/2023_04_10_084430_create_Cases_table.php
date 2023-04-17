<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasesTable extends Migration {

	public function up()
	{
		Schema::create('Cases', function(Blueprint $table) {
			$table->increments('id');
			$table->string('casename', 30);
			$table->string('description', 100);
			$table->time('Time');
			$table->string('place', 30);
		});
	}

	public function down()
	{
		Schema::drop('Cases');
	}
}