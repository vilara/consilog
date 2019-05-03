<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class postograd extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'nomePg', 'siglaPg', 'ordem'
	];
	
	
	public function militare(){
		return $this->hasMany('App\militare');
	}
	
	public function users()
	{
		return $this->hasManyThrough('App\User', 'App\militare');
	}
	

}
