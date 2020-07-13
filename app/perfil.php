<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
	public function usuario(){
		return $this->belongsToMany('App\User', 'usuario_perfil', 'perfil_id', 'usuario_id');
	}
	
	public function permissions(){
		return $this->belongsToMany('\App\Permission', 'permission_perfil', 'perfil_id', 'permission_id');
	}
}
