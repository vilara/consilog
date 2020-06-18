<?php

namespace App\Http\Controllers;

use App\Armamento;
use Illuminate\Http\Request;

class ArmamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$armamentos = Armamento::all();
    	return view('armamentos.index', compact('armamentos'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Armamento  $armamento
     * @return \Illuminate\Http\Response
     */
    public function show(Armamento $armamento)
    {
    	return view('armamentos.show', compact('armamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Armamento  $armamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Armamento $armamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Armamento  $armamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Armamento $armamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Armamento  $armamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Armamento $armamento)
    {
        //
    }
}
