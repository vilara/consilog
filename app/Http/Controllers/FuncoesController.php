<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\funcoe;
use App\usuario;

class FuncoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcoes = funcoe::all();
        return view('funcoes.index', compact('funcoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$funcoes = funcoe::all();
    	return view('funcoes.create', compact('funcoes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$funcao = new funcoe();
    	
    	$funcao->nomeFuncao = $request->nomeFuncao;
    	
    	$funcao->save();
    	
    	return redirect ( '/funcoes' )->with ( 'success', 'Função inserida com sucesso!' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(funcoe $funcao)
    {
    	return view ( 'funcoes.show', compact ( 'funcao') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(funcoe $funcao)
    {
    	return view ( 'funcoes.edit', compact ( 'funcao') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, funcoe $funcao)
    {
    	$funcao->nomeFuncao = $request->nomeFuncao;
    	
    	$funcao->save();
    	
    	return redirect ( '/funcoes' )->with ( 'success', 'Função editada com sucesso!' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(funcoe $funcao)
    {
    	$funcao->delete();
    	return redirect ( '/funcoes' )->with ( 'success', 'Função excluída com sucesso!' );
    }
}
