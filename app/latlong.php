<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class latlong extends Model
{
	public function endereco()
	{
		return $this->belongsTo('App\endereco');
	}
}
