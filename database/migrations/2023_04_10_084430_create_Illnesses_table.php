<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIllnessesTable extends Migration {

	public function up()
	{
		Schema::create('Illnesses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 30);
		});
	}

	public function down()
	{
		Schema::drop('Illnesses');
	}
}