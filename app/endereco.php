<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

/**
 * Usado para definir o type de dentro da tabela a ser morphitizada
 */
Relation::morphMap([
		
		'om'=> 'App\om',
		'usuario'=> 'App\User'
		
]);

/**
 * usado para relacionar tomany morph com a tabela usuarios e oms
 *
 */
class endereco extends Model
{
	public function enderecoTipo()
	{
		return $this->morphTo();
	}
	
	public function cidade()
	{
		return $this->belongsTo('App\cidade');
	}
	
	public function estado()
	{
		return $this->belongsTo('App\estado');
	}
	
	
	
}