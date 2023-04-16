<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('Users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('fullname', 50);
			$table->string('username');
			$table->string('password', 30);
			$table->integer('age');
			$table->string('gendar');
			$table->string('image');
			$table->string('university');
			$table->boolean('is_admin');
			$table->boolean('is_doctor');
			$table->boolean('is_supervisor');
		});
	}

	public function down()
	{
		Schema::drop('Users');
	}
}