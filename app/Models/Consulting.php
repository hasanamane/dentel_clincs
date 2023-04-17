<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulting extends Model {

	protected $table = 'Consulting';
	public $timestamps = false;

	public function Comments()
	{
		return $this->hasMany('Comments');
	}

}
