<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class latlong extends Model
{
	
	protected $fillable = [
			'endereco_id', 'latitude', 'longitude'
	];
	public function endereco()
	{
		return $this->belongsTo('App\endereco');
	}
}
