<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

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
	protected $fillable = [
			'rua', 'numeroEndereco', 'complemento', 'bairro', 'cep', 'estado', 'cidade', 'enderecoTipo_type', 'enderecoTipo_id'
	];
	public function enderecoTipo()
	{
		return $this->morphTo();
	}
}
