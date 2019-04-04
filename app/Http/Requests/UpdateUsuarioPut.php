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
    			'name' => 'required|max:255',
    			'nomeGuerra' => 'required',
    			'cpf' => 'required|numeric',
    			'idt' => 'required|numeric',
    			'email' => 'required|email',
    			'sexo' => 'required',
    			'funcoe_id' => 'required',
    			'om_id' => 'required',
    	];
    }
    
    public function messages()
    {
    	return [
    			'nomeCompleto.required' => 'Preencha o campo nome Completo',
    			'nomeGuerra.required'  => 'Preencha o campo nome de Guerra',
    			'cpf.required' => 'Preencha o campo CPF',
    			'cpf.numeric' => 'O CPF deve ser preenchido apenas com números',
    			'idt.required' => 'Preencha o campo identidade militar',
    			'idt.numeric' => 'A Idt deve ser preenchida apenas com números',
    			'email.required' => 'Preencha o campo E-mail',
    			'email.email' => 'Email inválido',
    			'email.unique' => 'E-mail já cadastrado',
    			'sexo.required' => 'Selecione seu sexo',
    			'funcoe_id.required' => 'Selecione sua função',
    			'om_id.required' => 'Selecione sua OM',
    			
    	];
    }
}
