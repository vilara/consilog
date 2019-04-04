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

class UsuariosController extends Controller
{
	
// 	public function __construct()
// 	{
// 		$this->middleware('auth');
// 	}
		
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    	$user = User::with('enderecos','enderecos.cidade','enderecos.cidade.estado')->get();
        
        return view('usuario.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $funcoe = funcoe::all();
        $om = om::all();
       return view('usuario.create', compact('om','funcoe','perfil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioPost $request)
    {
        $usuario = new usuario();
        $usuario->name = $request->name;
        $usuario->nomeGuerra = $request->nomeGuerra;
        $usuario->cpf = $request->cpf;
        $usuario->idt = $request->idt;
        $usuario->email = $request->email;
        $usuario->sexo = $request->sexo;
        $usuario->funcoe_id = $request->funcoe_id;
        $usuario->om_id = $request->om_id;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        return redirect('/usuarios')->with('success', 'Usuário inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = usuario::find($id);
        return view('usuario.show', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
    	$funcoe = funcoe::all();
    	$om = om::all();
    	$perfi = perfil::all();
    	return view('usuario.edit', compact('usuario','om','funcoe','perfi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioPut $request, $id)
    {
    	$usuario = usuario::find($id);
    	$usuario->name = $request->name;
    	$usuario->nomeGuerra = $request->nomeGuerra;
    	$usuario->cpf = $request->cpf;
    	$usuario->idt = $request->idt;
    	$usuario->email = $request->email;
    	$usuario->sexo = $request->sexo;
    	$usuario->funcoe_id = $request->funcoe_id;
    	$usuario->om_id = $request->om_id;
    	$usuario->save();
    	
    	$perfill = perfil::find($request->perfil);
    	$usuario->perfils()->attach($perfill);
    	
    	
    	return redirect('/usuarios')->with('success', 'Usuário Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$usuario = usuario::find($id);
    	$usuario->delete();
    	
    	$usuario->perfils()->detach();
    	
    	return redirect('/usuarios')->with('success', 'Usuário excluído com sucesso!');
    }
}