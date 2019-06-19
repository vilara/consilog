<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSecao extends FormRequest
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
    			'abrevSecao' => [
    					'required',
    			],
    			'nomeSecao' => [
    					'required',
    			],
    	];
    }
    public function messages() {
    	return [
    			'abrevSecao.required' => 'Preencha o campo abreviatura da seção',
    			'nomeSecao.required' => 'Preencha o campo nome da seção',
    	];
    }
}
