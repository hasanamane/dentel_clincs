<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

	protected $table = 'Users';
	public $timestamps = true;

	public function Patients()
	{
		return $this->hasMany('Patients');
	}

	public function Business()
	{
		return $this->hasMany('Business');
	}

	public function Events()
	{
		return $this->hasMany('Events');
	}

}
