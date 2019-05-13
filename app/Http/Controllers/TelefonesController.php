<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\om;
use App\telefone;
use App\tipoTel;
use App\usuario;
use App\secoe;

class TelefonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
    {
    	$telefone = telefone::find(10);
    	return view('telefone.index', compact('telefone'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    public function CreateTelUsu($id) {
    	
    	$usuario = User::find ( $id );
    	return view ( 'endereco.create', compact ( 'usuario' ) );
    }
    
    
    public function CreateTelOm($id) {
    	$secao = secoe::all ();
    	$telTipo = tipoTel::all();
    	$om = om::find ( $id );
    	return view ( 'telefone.createOm', compact ( 'om','secao','telTipo' ) );
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$telefone = new telefone();
    	
    	$telefone->ddd = $request->ddd;
    	$telefone->numero = $request->numero;
    	$telefone->secoe_id = $request->secoe_id;
    	$telefone->tipotel_id = $request->tipotel_id;
    	if ($request->tipo == 'usuario') {
    		$telefone->telefoneTipo_type = 'usuario';
    	} else {
    		$telefone->telefoneTipo_type = 'om';
    	}
    	
    	$telefone->telefoneTipo_id = $request->id;
    	$telefone->save();
    	
    	if ($request->tipo == 'usuario') {
    	return redirect ( '/usuarios' )->with ( 'success', 'Telefone do usuário inserido com sucesso!' );
    	} else {
    	return redirect ( '/oms' )->with ( 'success', 'Telefone da OM inserido com sucesso!' );
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$telefone = telefone::find($id);
    	return view('telefone.index', compact('telefone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$secao = secoe::all ();
    	$telTipo = tipoTel::all();
    	$telefone = telefone::find ( $id );
    	$usuario = User::find ( $telefone->telefoneTipo_id );
    	return view ( 'telefone.edit', compact ( 'telefone', 'usuario', 'secao', 'telTipo' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$telefone = telefone::find($id);
    	
    	$telefone->ddd = $request->ddd;
    	$telefone->numero = $request->numero;
    	$telefone->secoe_id = $request->secoe_id;
    	$telefone->tipotel_id = $request->tipotel_id;
    	    	
    	
    	$telefone->save();
    	
    	return redirect ( '/usuarios' )->with ( 'success', 'Telefone do usuário inserido com sucesso!' );
    }
    
    public function omTel($id) {
    	$telefones = om::find ( $id )->telefones ()->get ();
    	$om = om::find($id);
    	return view ( 'telefone.om_tel', compact ( 'telefones','om' ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$telefone = telefone::find($id);
    	$telefone->delete();
    	
    	return redirect ( '/usuarios' )->with ( 'success', 'Telefone de usuário excluído com sucesso!' );
    }
}
