<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Comments extends Model {

	protected $table = 'Comments';
	public $timestamps = false;

	public function Consulting()
	{
		return $this->belongsTo('Consulting');
	}

}
