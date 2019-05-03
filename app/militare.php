<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class militare extends Model
{
	
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'idtMilitar', 'situacao', 'postograd_id'
	];
	

	public function users()
	{
		return $this->morphOne('App\User', 'usuarioable');
	}
	
	
	public function postograd()
	{
		return $this->belongsTo('App\postograd');
	}
	
	
	
	
}
