<?php

namespace App\Http\Controllers;

use App\tipoTel;
use Illuminate\Http\Request;

class tipoTelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'teste';
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
     * @param  \App\tipoTel  $tipoTel
     * @return \Illuminate\Http\Response
     */
    public function show(tipoTel $tipoTel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipoTel  $tipoTel
     * @return \Illuminate\Http\Response
     */
    public function edit(tipoTel $tipoTel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipoTel  $tipoTel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipoTel $tipoTel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipoTel  $tipoTel
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipoTel $tipoTel)
    {
        //
    }
}
