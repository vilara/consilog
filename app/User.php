<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Usado para definir o type de dentro da tabela a ser morphitizada
 */
Relation::morphMap([
		
		'civil'=> 'App\civi',
		'militar'=> 'App\militare'
		
]);

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    		'name', 'email', 'password', 'nomeGuerra', 'cpf', 'idt', 'sexo', 'funcoe_id', 'om_id', 'perfil_id', 'usuarioable_id', 'usuarioable_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function usuarioable()
    {
    	return $this->morphTo();
    }
    
    public function perfil()
    {
    	return $this->belongsTo('App\perfil');
    }
    
    public function postograd()
    {
    	return $this->belongsTo('App\postograd');
    }
    
 
    
    public function funcoe()
    {
    	return $this->belongsTo('App\funcoe');
    }
    
    public function enderecos()
    {
    	return $this->morphMany('App\endereco', 'enderecoTipo');
    }
    
    
    public function telefones()
    {
    	return $this->morphMany('App\telefone', 'telefoneTipo');
    }
    
    public function om()
    {
    	return $this->belongsTo('App\om');
    }
//  ----------------------------------------------------------------------------

    
    
    
    
    
    protected $table = 'usuarios';
    
}
