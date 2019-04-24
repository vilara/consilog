<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class civi extends Model
{
	public function users()
	{
		return $this->morphOne('App\User', 'usuarioable');
	}
}
