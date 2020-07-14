<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTelUsu extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
    	return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
    	return [
    			'ddd' => [
    					'regex:/^\(\d{2}\)$/',
    			],
    			'numero' => [
    					'regex:/^\d?\d{4}-\d{4}$/',
    			],
    			'tipotel_id' => [
    					'required',
    			],
    			'secoe_id' => [
    					'required',
    			],
    	];
    }
    public function messages() {
    	return [
    			'ddd.regex' => 'Preencha o campo DDD no formato correto',
    			'numero.regex' => 'Preencha o campo Número do telefone no formato correto',
    			'tipotel_id.required' => 'Selecione o tipo do telefone',
    			'secoe_id.required' => 'Selecione a seção do telefone',
    	];
    }
}
