<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Illnesses extends Model {

	protected $table = 'Illnesses';
	public $timestamps = true;

	public function Patients()
	{
		return $this->belongsTo('Patients');
	}

}
