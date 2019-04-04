<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
	
	
	public function cidade(){
		return $this->hasMany('App\cidade');
	}
	
	
	public function enderecos()
	{
		return $this->hasManyThrough('App\endereco', 'App\cidade');
	}
}
