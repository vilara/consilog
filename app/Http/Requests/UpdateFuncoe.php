<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFuncoe extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    	return [
    			'abrevFuncao' => [
    					'required',
    			],
    			'nomeFuncao' => [
    					'required',
    			],
    	];
    }
    
    public function messages(){
    	return [
    			'abrevFuncao.required' => 'Preencha o campo abreviatura da função',
    			'nomeFuncao.required' => 'Preencha o campo nome da função',
    	];
    	
    }
}
