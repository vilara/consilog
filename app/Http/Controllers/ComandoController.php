<?php

namespace App\Http\Controllers;

use App\comando;
use Illuminate\Http\Request;

class ComandoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$comandos = comando::all();
    	return view('comando.index', compact('comandos'));
    }
    
    public function showSubordinadas($id)
    {
    	$cmdsu = comando::find($id);
    	return view('comando.showSubordinadas', compact('cmdsu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$comando = comando::all();
    	return view ( 'comando.create', compact ( 'comando') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$comando = new comando();
    	
    	$comando->nomeCmdo = $request->nomeCmdo;
    	$comando->siglaCmdo = $request->siglaCmdo;
    	$comando->ordem = $request->ordem;
    	$comando->codomCmdo = $request->codomCmdo;
    	$comando->codugCmdo = $request->codugCmdo;
    	
    	$comando->save();
    	
    	return redirect ( '/comandos' )->with ( 'success', 'Comando inserido com sucesso!' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comando  $comando
     * @return \Illuminate\Http\Response
     */
    public function show(comando $comando)
    {
    	
    	return view ( 'comando.show', compact ( 'comando') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comando  $comando
     * @return \Illuminate\Http\Response
     */
    public function edit(comando $comando)
    {
    	return view ( 'comando.edit', compact ( 'comando') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comando  $comando
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comando $comando)
    {
    	$comando->nomeCmdo = $request->nomeCmdo;
    	$comando->siglaCmdo = $request->siglaCmdo;
    	$comando->ordem = $request->ordem;
    	$comando->codomCmdo = $request->codomCmdo;
    	$comando->codugCmdo = $request->codugCmdo;
    	
    	$comando->save();
    	
    	return redirect ( '/comandos' )->with ( 'success', 'Editado com sucesso!' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comando  $comando
     * @return \Illuminate\Http\Response
     */
    public function destroy(comando $comando)
    {
    	
    	$comando->delete();
    	
    	return redirect ( '/comandos' )->with ( 'success', 'Comando excluído com sucesso!' );
    }
}
