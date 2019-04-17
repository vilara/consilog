<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class secoe extends Model
{
	public function telefone(){
		return $this->hasMany('App\telefone');
	}
}
