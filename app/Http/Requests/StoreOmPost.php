<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOmPost extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [ 
				'nomeOm' => [ 
						'required' 
				],
				'siglaOm' => [ 
						'required' 
				],
				'codom' => [ 
						'required',
						'numeric',
						'digits:6' 
				],
				'codoug' => [ 
						'required',
						'numeric',
						'digits:6'
				] 
		];
	}
	public function messages() {
		return [ 
				'nomeOm.required' => 'Preencha o campo nome da OM',
				'siglaOm.required' => 'Preencha o campo sigla da OM',
				'codom.required' => 'Preencha o campo Codom da OM',
				'codom.digits' => 'O campo Codom necessita ser preenchido com 6 dígitos',
				'codoug.required' => 'Preencha o campo Codug da OM',
				'codoug.digits' => 'O campo Codoug necessita ser preenchido com 6 dígitos',
		
		];
	}
}
