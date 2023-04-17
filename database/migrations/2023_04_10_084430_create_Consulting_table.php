<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultingTable extends Migration {

	public function up()
	{
		Schema::create('Consulting', function(Blueprint $table) {
			$table->increments('id');
			$table->string('content');
			$table->time('Time');
			$table->boolean('is_viwe');
		});
	}

	public function down()
	{
		Schema::drop('Consulting');
	}
}