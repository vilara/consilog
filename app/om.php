<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class om extends Model
{
    
    public function telefones()
    {
        return $this->morphMany('App\telefone', 'telefoneTipo');
    }
   
    public function enderecos()
    {
    	return $this->morphMany('App\endereco', 'enderecoTipo');
    }
    
//     public function usuarios(){
//         return $this->hasMany('App\User', 'om_id');
//     }
}
