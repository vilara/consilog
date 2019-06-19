<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\secoe;
use App\Http\Requests\StoreSecao;

class SecoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seco = secoe::all();
        return view('secoes.index', compact('seco'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$seco = secoe::all();
    	return view('secoes.create', compact('seco'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecao $request, secoe $seco)
    {
    	
    	$seco->create($request->all());
    	
    	return redirect ( '/secoes' )->with ( 'success', 'Seção inserida com sucesso!' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(secoe $seco)
    {
    	return view('secoes.show', compact('seco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(secoe $seco)
    {
    	return view('secoes.edit', compact('seco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSecao $request, secoe $seco)
    {
    	$seco->nomeSecao = $request->nomeSecao;
    	$seco->abrevSecao = $request->abrevSecao;
    	
    	$seco->save();
    	
    	return redirect ( '/secoes' )->with ( 'success', 'Seção editada com sucesso!' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(secoe $seco)
    {
    	$seco->delete();
    	return redirect ( '/secoes' )->with ( 'success', 'Seção excluída com sucesso!' );
    }
}
