<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
	public function usuario(){
		return $this->hasMany('App\User');
	}
}
