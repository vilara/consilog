<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\militare;
use App\usuario;
use App\perfil;

class RegisterController extends Controller {
	/*
	 * ,--------------------------------------------------------------------------
	 * , Register Controller
	 * ,--------------------------------------------------------------------------
	 * ,
	 * , This controller handles the registration of new users as well as their
	 * , validation and creation. By default this controller uses a trait to
	 * , provide this functionality without requiring any additional code.
	 * ,
	 */
	
	use RegistersUsers;
	
	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware ( 'guest' );
	}
	
	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param array $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make ( $data, [ 
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
						'unique:usuarios',
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
						'unique:usuarios' 
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
				'password' => [ 
						'required',
						'string',
						'min:6',
						'confirmed' 
				] 
		], [  // mensagens de erro
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
		
		] );
	}
	
	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param array $data
	 * @return \App\User
	 */
	protected function create(array $data) {
		
		
		$mil = new militare();
		$mil->idtMilitar = $data ['idt'];
		$mil->situacao = $data ['situacao'];
		$mil->postograd_id = $data ['postograd_id'];
		$mil->save ();
		
		$usuario = new User ();
		$usuario->name = $data ['name'];
		$usuario->email = $data ['email'];
		$usuario->nomeGuerra = $data ['nomeGuerra'];
		$usuario->cpf = $data ['cpf'];
		$usuario->idt = $data ['idt'];
		$usuario->sexo = $data ['sexo'];
		$usuario->funcoe_id = $data ['funcoe_id'];
		$usuario->om_id = $data ['om_id'];
		$usuario->perfil_id = 1;
		$usuario->password = Hash::make ( $data ['password'] );
		
		$usuario->save ();
		$usuario->perfil()->attach(1);
		
		$mil->users()->save($usuario);
		
		return $usuario;
	}
}
