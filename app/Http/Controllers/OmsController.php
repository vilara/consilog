<?php
namespace App\Http\Controllers;

use App\om;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\telefone;

class OmsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $oms = om::with('enderecos.latlong')->get();
        return view('om.index', compact('oms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$oms = om::all();
    	return view ( 'om.create', compact ( 'oms') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$om = new om();
    	
    	$om->nomeOm = $request->nomeOm;
    	$om->siglaOm = $request->siglaOm;
    	$om->codom = $request->codom;
    	$om->codoug = $request->codoug;
    	
    	$om->save();
    	
    	return redirect ( '/oms' )->with ( 'success', 'OM inserida com sucesso!' );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(om $om)
    {
    	return view ( 'om.show', compact ( 'om') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Om $om)
    {
        return view('om.edit', compact('om'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, om $om)
    {
    	
    	$om->nomeOm = $request->nomeOm;
    	$om->siglaOm = $request->siglaOm;
    	$om->codom = $request->codom;
    	$om->codoug = $request->codoug;
    	
    	$om->save();
    	
    	return redirect ( '/oms' )->with ( 'success', 'OM inserida com sucesso!' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(om $om)
    {
    	$om->delete();
    	
    	return redirect ( '/om' )->with ( 'success', 'OM excluída com sucesso!' );
    }
}
