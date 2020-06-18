<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armamento extends Model
{
	public function oms()
	{
		return $this->belongsToMany('App\om', 'armamentos_oms', 'om_id', 'armamento_id');
		
	}
}
