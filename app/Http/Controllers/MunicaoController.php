<?php

namespace App\Http\Controllers;

use App\Municao;
use Illuminate\Http\Request;

class MunicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$municaos = Municao::all();
    	return view('municaos.index', compact('municaos'));
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
     * @param  \App\Municao  $municao
     * @return \Illuminate\Http\Response
     */
    public function show(Municao $municao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Municao  $municao
     * @return \Illuminate\Http\Response
     */
    public function edit(Municao $municao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Municao  $municao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municao $municao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Municao  $municao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municao $municao)
    {
        //
    }
}
