<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
	public function perfils(){
		return $this->belongsToMany('\App\perfil', 'permission_perfil', 'permission_id', 'perfil_id');
	}
}
