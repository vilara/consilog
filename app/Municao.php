<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municao extends Model
{
	public function oms()
	{
		return $this->belongsToMany('App\om', 'municaos_oms', 'om_id', 'armamento_id');
		
	}
}
