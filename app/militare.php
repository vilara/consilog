<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class militare extends Model
{
	public function users()
	{
		return $this->morphOne('App\User', 'usuarioable');
	}
}
