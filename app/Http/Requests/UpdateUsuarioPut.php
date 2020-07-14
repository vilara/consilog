<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioPut extends FormRequest
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
    public function rules()
    {
    	return [
    			'postograd_id' => [
    					'bail',
    					'required'
    			],
    			'name' => [
    					'required',
    					'string',
    					'max:255'
    			],
    			'nomeGuerra' => [
    					'required',
    					'string',
    					'max:255'
    			],
    			'cpf' => [
    					'required',
    					'numeric',
    					
    					'digits:11'
    			],
    			'idt' => [
    					'required',
    					'numeric'
    			],
    			'email' => [
    					'required',
    					'email',
    					'max:255',
    					
    			],
    			'om_id' => [
    					'required'
    			],
    			'funcoe_id' => [
    					'required'
    			],
    			'sexo' => [
    					'required'
    			],
    			'situacao' => [
    					'required'
    			],
    			
    	];
    }
    
    public function messages()
    {
    	return [
    			'postograd_id.required' => 'Favor escolher um posto ou graduação',
    			'name.required' => 'O Campo nome é obrigatório.',
    			'name.string' => ' O Campo nome pode conter somente letras.',
    			'nomeGuerra.required' => 'O Campo nome de guerra é obrigatório.',
    			'cpf.required' => 'O Campo CPF é obrigatório.',
    			'cpf.numeric' => 'O Campo CPF deve ser preenchido apenas com números.',
    			'cpf.digits' => 'O Campo cpf deve conter 11 números.',
    			'idt.required' => 'O Campo identidade é obrigatório.',
    			'idt.numeric' => 'O Campo identidade deve ser preenchido apenas com números.',
    			'email.required' => 'O Campo e-mail é obrigatório.',
    			'email.email' => 'Campo e-mail inválido.',
    			'email.unique' => 'Email já cadastrado.',
    			'om_id.required' => 'Favor escolher uma OM',
    			'funcoe_id.required' => 'Favor escolher uma Função',
    			'sexo.required' => 'Favor selecione seu gênero',
    			'situacao.required' => 'Favor selecione sua situação',
    			'password.required' => 'O Campo senha é obrigatório.',
    			'password.min' => 'O Campo senha deve ser preenchido com no mínimo 06 caracteres.',
    			'password.confirmed' => 'Favor confirmar a senha corretamente.',
    			
    	];
    }
}
