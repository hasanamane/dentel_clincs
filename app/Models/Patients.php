<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Patients extends Model {

	protected $table = 'Patients';
	public $timestamps = true;

	public function Users()
	{
		return $this->belongsTo('Users');
	}

	public function Illnesses()
	{
		return $this->belongsTo('Illnesses');
	}

	public function Cases()
	{
		return $this->hasMany('Cases');
	}

}
