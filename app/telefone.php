<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

/**
 * Usado para definir o type de dentro da tabela a ser morphitizada
 */
Relation::morphMap ( [ 
		
		'om' => 'App\om',
		'usuario' => 'App\User' 

] );

/**
 * usado para relacionar tomany morph com a tabela usuarios e oms
 */
class telefone extends Model {
	
	
	public function telefoneTipo() {
		return $this->morphTo ();
	}
	
	
}
