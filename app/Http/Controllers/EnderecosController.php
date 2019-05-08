<?php

namespace App\Http\Controllers;

use App\endereco;
use App\usuario;
use Illuminate\Http\Request;
use App\User;

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
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		
		$endereco = new endereco ();
		
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
		
		return redirect ( '/usuarios' )->with ( 'success', 'Endereço do usuário inserido com sucesso!' );
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(endereco $endereco) {
		
		$usu = User::find ( $endereco->enderecoTipo_id );
		return view ( 'endereco.show', compact ( 'endereco', 'usu' ) );
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
