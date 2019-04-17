<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoTel extends Model
{
	public function telefone(){
		return $this->hasMany('App\telefone', 'id');
	}
	
	protected $table = 'tipotels';
}
