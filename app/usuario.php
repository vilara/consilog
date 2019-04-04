<?php
namespace App;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuario extends Authenticatable
{
	use Notifiable;
	

//     public function perfils()
//     {
//         return $this->belongsToMany('App\perfil', 'usuario_perfil');
//     }

   
//     public function endereco()
//     {
//         return $this->hasMany('App\endereco');
//     }

//     public function funcoe()
//     {
//         return $this->belongsTo('App\funcoe');
//     }


//     public function om()
//     {
//         return $this->belongsTo('App\om');
//     }

//     public function login()
//     {
//         return $this->hasOne('App\login');
//     }
}
