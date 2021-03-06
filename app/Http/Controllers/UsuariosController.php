<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\telefone;
use App\om;
use App\funcoe;
use App\Http\Requests\StoreUsuarioPost;
use App\Http\Requests\UpdateUsuarioPut;
use App\perfil;
use App\User;
use App\secoe;
use App\tipoTel;
use App\postograd;
use App\militare;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller {
	
	// public function __construct()
	// {
	// $this->middleware('auth');
	// }
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	
	public function index() {
		
		if (Auth::user()->can('update')) {
			$user = User::with('enderecos','usuarioable')->get();
		}else{	
			$user = Auth::user();
		}
		
		
		$postgrad = postograd::all();
		return view ( 'usuario.index', compact ( 'user', 'postgrad' ) );
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$funcoe = funcoe::all ();
		$om = om::all ();
		$pgs = postograd::all();
		$perfil = perfil::all();
		return view ( 'usuario.create', compact ( 'om', 'funcoe', 'perfil','pgs' ) );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreUsuarioPost $request) {
		// $usuario = new User();
		// $usuario->name = $request->name;
		// $usuario->nomeGuerra = $request->nomeGuerra;
		// $usuario->cpf = $request->cpf;
		// $usuario->idt = $request->idt;
		// $usuario->email = $request->email;
		// $usuario->sexo = $request->sexo;
		// $usuario->funcoe_id = $request->funcoe_id;
		// $usuario->om_id = $request->om_id;
		// $usuario->password = Hash::make($request->password);
		
		// $usuario->save();
		
		// $perfill = perfil::find(1);
		// $usuario->perfils()->sync($perfill);
		
		// $usu = User::find(49);
		// $per = perfil::find(1);
		
		// $per->users()->attach($usu);
		
		// $perfil = perfil::find(1);
		// $usuario->perfils()->attach($perfil->id);
		
		// return redirect('/usuarios')->with('success', 'Usuário inserido com sucesso!');
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $usuario) {
		$funcoe = funcoe::all ();
		$om = om::all ();
		$perfi = perfil::all();
		$pgs = postograd::all();
		return view ( 'usuario.show', compact ( 'usuario','om', 'funcoe', 'perfi','pgs' ) );
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $usuario) {
		$funcoe = funcoe::all ();
		$om = om::all ();
		$perfi = perfil::all();
		$pgs = postograd::all();
		return view ( 'usuario.edit', compact ( 'usuario', 'om', 'funcoe', 'perfi','pgs' ) );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateUsuarioPut $request, $id) {
		$usuario = User::find ( $id );
		$usuario->name = $request->name;
		$usuario->nomeGuerra = $request->nomeGuerra;
		$usuario->cpf = $request->cpf;
		$usuario->idt = $request->idt;
		$usuario->email = $request->email;
		$usuario->sexo = $request->sexo;
		$usuario->funcoe_id = $request->funcoe_id;
		$usuario->om_id = $request->om_id;
		$usuario->perfil_id = 1;
		
		if ($usuario->usuarioable_type == 'militar') {
			$mil = militare::find($usuario->usuarioable_id);
		$mil->idtMilitar = $request->idt;
		$mil->postograd_id = $request->postograd_id;
		$mil->situacao = $request->situacao;
		$mil->save();
		}
		if ( $request->password != null){
			$usuario->password = Hash::make($request->password);
		}else{
			unset($usuario->password);
			}
		$usuario->save();
		
		if (isset($request->perfil)) {
			$usuario->perfil()->detach();
			$usuario->perfil()->attach($request->perfil);
		}
		
		return redirect ( '/usuarios' )->with ( 'success', 'Usuário Editado com sucesso!' );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		
		
		$usuario = User::find($id);
		
		
		$usuario->usuarioable()->delete();
		$usuario->telefones()->delete();
		$usuario->enderecos()->delete();
		$usuario->delete();
		
		
		
		return redirect ( '/usuarios' )->with ( 'success', 'Usuário excluído com sucesso!' );
	}
	
	// Controladores de manipulação -------------------------------
	
	/**
	 *
	 * @param int $id
	 *        	retorna o telefone do usuario com referência ao seu Id
	 */
	public function userTel($id) {
		$telefones = User::find ( $id )->telefones ()->get ();
		$usuario = User::find($id);
		return view ( 'telefone.user_tel', compact ( 'telefones','usuario' ) );
	}
	public function userTelCreate($id) {
		$secao = secoe::all ();
		$telTipo = tipoTel::all();
		$usuario = User::find ( $id );
		return view ( 'telefone.create', compact ( 'usuario','secao','telTipo' ) );
	}
	public function userTelStore($id) {
		$telefones = User::find ( $id )->telefones ()->get ();
		return view ( 'telefone.user_tel', compact ( 'telefones' ) );
	}
}
