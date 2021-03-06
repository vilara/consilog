<?php

namespace App\Http\Controllers;

use App\endereco;
use App\usuario;
use Illuminate\Http\Request;
use App\User;
use App\om;

class EnderecosController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$endereco = endereco::find ( 1 );
		$usu = User::find ( $endereco->enderecoTipo_id );
		return view ( 'endereco.show', compact ( 'endereco', 'usu') );
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$endereco = endereco::find ( $id );
		$usu = User::find ( $endereco->enderecoTipo_id );
		return view ( 'endereco.show', compact ( 'endereco', 'usu') );
	}
	
	public function CreateEndUsu($id) {
		$usu = User::find ( $id );
		return view ( 'endereco.create', compact ( 'usu' ) );
	}
	
	public function CreateEndOm($id) {
		$om = om::find ( $id );
		return view ( 'endereco.createOm', compact ( 'om' ) );
	}
	
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, endereco $endereco) {
		
		// Validação
		$this->validate($request, [
				'rua' => 'required|min:3',
				'numeroEndereco' => 'required',
				'cep' => 'required',
				'bairro' => 'required',
				'cidade' => 'required',
				'estado' => 'required',
// 				'cpf' => 'min:11|max:11|unique:clientes',
// 				'nascimento' => 'date|date_format:Y-m-d' // nullable| torna opcional
		],[ // Mensagens
				'rua.required' => ' O campo Logradouro (nome da rua) é obrigatório.',
				'numeroEndereco.required' => ' O campo número é obrigatório.',
				'cep.required' => ' O campo CEP é obrigatório.',
				'bairro.required' => ' O campo Bairro é obrigatório.',
				'cidade.required' => ' O campo Cidade é obrigatório.',
				'estado.required' => ' O campo Estado é obrigatório.',
				'estado.regex' => ' O campo Estado deve conter dois caracteres.',
// 				'cpf.required' => ' O CPF é obrigatório.',
// 				'cpf.min' => ' O CPF precisa ter 11 dígitos.',
// 				'nascimento.date' => 'Nascimento precisa ter uma data válida e Y-m-d'
		]);
		
		
		$endereco->rua = $request->rua;
		$endereco->numeroEndereco = $request->numeroEndereco;
		$endereco->complemento = $request->complemento;
		$endereco->bairro = $request->bairro;
		$endereco->cep = $request->cep;
		$endereco->cidade = $request->cidade;
		$endereco->estado = $request->estado;
		if ($request->tipo == 'usuario') {
			$endereco->enderecoTipo_type = 'usuario';
		} else {
			$endereco->enderecoTipo_type = 'om';
		}
		
		$endereco->enderecoTipo_id = $request->id;
		$endereco->save();
		
		if ($request->tipo == 'usuario') {
		return redirect ( '/usuarios' )->with ( 'success', 'Endereço do usuário inserido com sucesso!' );
		} else {
		return redirect ( '/oms' )->with ( 'success', 'Endereço da OM inserido com sucesso!' );
		}
		
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(endereco $endereco) {
		
		if ($endereco->enderecoTipo_type == 'usuario'){
		$usu = User::find ( $endereco->enderecoTipo_id );
		return view ( 'endereco.show', compact ( 'endereco','usu') );
		}else{
		$om = om::find ( $endereco->enderecoTipo_id );
		return view ( 'endereco.showOm', compact ( 'endereco','om') );
		}
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$endereco = endereco::find ( $id );
		$usu = User::find ( $endereco->enderecoTipo_id );
		return view ( 'endereco.edit', compact ( 'endereco', 'usu' ) );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$endereco = endereco::find ( $id );
		$usu = User::find ( $endereco->enderecoTipo_id );
		$endereco->rua = $request->rua;
		$endereco->numeroEndereco = $request->numeroEndereco;
		$endereco->complemento = $request->complemento;
		$endereco->bairro = $request->bairro;
		$endereco->cidade = $request->cidade;
		$endereco->estado = $request->estado;
		$endereco->save();
		
		return redirect ( '/usuarios' )->with ( 'success', 'Endereço do Usuário Editado com sucesso!' );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$endereco = endereco::find($id);
		$endereco->delete();
		
		return redirect ( '/usuarios' )->with ( 'success', 'Endereço de usuário excluído com sucesso!' );
	}
}
