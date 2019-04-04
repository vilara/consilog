<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    public function users(){
    	return $this->belongsToMany('App\User', 'usuario_perfil', 'usuario_id', 'perfil_id');
    }
}
