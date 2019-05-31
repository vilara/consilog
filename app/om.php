<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class om extends Model
{
	
	protected $fillable = [
			'nomeOm',
			'siglaOm',
			'codom',
			'codoug'
	];
	
	/**
	 * Polymorphic Relationships
	 * @return \Illuminate\Database\Eloquent\Relations\MorphMany
	 */
    
    public function telefones()
    {
        return $this->morphMany('App\telefone', 'telefoneTipo');
    }
   
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function enderecos()
    {
    	return $this->morphMany('App\endereco', 'enderecoTipo');
    }
    
    
    /**
     * Many to Many
     */
    public function comandos()
    {
    	return $this->belongsToMany('App\comando')->withPivot('omds');
    }
    
//     public function usuarios(){
//         return $this->hasMany('App\User', 'om_id');
//     }
}
