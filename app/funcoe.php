<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcoe extends Model
{
	
	protected $fillable = [
			'nomeFuncao', 'abrevFuncao'
	];
	
	public function usuario(){
		return $this->hasMany('App\User');
	}
}
