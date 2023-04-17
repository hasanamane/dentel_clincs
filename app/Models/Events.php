<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model {

	protected $table = 'Events';
	public $timestamps = false;

	public function Users()
	{
		return $this->belongsTo('Users');
	}

}
