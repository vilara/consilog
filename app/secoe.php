<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class secoe extends Model
{
	protected $fillable = [
			'nomeSecao', 'abrevSecao'
	];
	public function telefone(){
		return $this->hasMany('App\telefone');
	}
}
