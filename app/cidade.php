<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cidade extends Model
{
	public function endereco(){
		return $this->hasMany('App\endereco');
	}
	
	public function estado()
	{
		return $this->belongsTo('App\estado');
	}
}
