<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Patients', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Patients', function(Blueprint $table) {
			$table->foreign('id_case')->references('id')->on('Cases')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Patients', function(Blueprint $table) {
			$table->foreign('id_illness')->references('id')->on('Illnesses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Events', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Business', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Comments', function(Blueprint $table) {
			$table->foreign('id_consulting')->references('id')->on('Consulting')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Patients', function(Blueprint $table) {
			$table->dropForeign('Patients_id_user_foreign');
		});
		Schema::table('Patients', function(Blueprint $table) {
			$table->dropForeign('Patients_id_case_foreign');
		});
		Schema::table('Patients', function(Blueprint $table) {
			$table->dropForeign('Patients_id_illness_foreign');
		});
		Schema::table('Events', function(Blueprint $table) {
			$table->dropForeign('Events_id_user_foreign');
		});
		Schema::table('Business', function(Blueprint $table) {
			$table->dropForeign('Business_id_user_foreign');
		});
		Schema::table('Comments', function(Blueprint $table) {
			$table->dropForeign('Comments_id_consulting_foreign');
		});
	}
}