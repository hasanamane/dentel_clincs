<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Cases extends Model {

	protected $table = 'Cases';
	public $timestamps = false;

	public function Patients()
	{
		return $this->belongsTo('Patients');
	}

}