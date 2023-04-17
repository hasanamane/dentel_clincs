<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;



class CreatePatientsTable extends Migration {

	public function up()
	{
		Schema::create('Patients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('age');
			$table->string('FullName');
			$table->string('PhoneNumber');
			$table->integer('id_user')->unsigned();
			$table->integer('id_case')->unsigned();
			$table->integer('id_illness')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Patients');
	}
}
