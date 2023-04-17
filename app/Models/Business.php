<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model {

	protected $table = 'Business';
	public $timestamps = false;

	public function Users()
	{
		return $this->belongsTo('Users');
	}

}
