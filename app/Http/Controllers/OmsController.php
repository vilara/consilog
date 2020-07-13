<?php
namespace App\Http\Controllers;

use App\om;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\telefone;
use App\comando;
use App\Http\Requests\StoreOmPost;
use App\Http\Requests\StoreUsuarioPost;

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
     * Show the form for creating the subordination
     */
    
    public function CreateSubordinacaoOm($id)
    {
    	$om = om::find($id);
    	$cmdo = comando::all();
    	return view ( 'om.createSubordinacao', compact ( 'om','cmdo') );
    }
    
    public function storeSubordinacaoOm(Request $request)
    {
    	
    	$om = om::find($request->id);
    	$cmdo = comando::find($request->comando_id);
    	
    	$om->comandos()->attach([$cmdo->id => ['omds' => $request->omds]]);
    	
    	return redirect ( '/oms' )->with ( 'success', 'Subordinação inserida com sucesso!' );
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOmPost $request, om $om)
    {
    	$om->create($request->all());   	
    	
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
    
    public function omTel($id) {
    	$telefones = om::find ( $id )->telefones ()->get ();
    	$om = om::find($id);
    	return view ( 'telefone.om_tel', compact ( 'telefones','om' ) );
    }
    public function destroy(om $om)
    {
    	
    	$om->telefones()->delete();
    	$om->enderecos()->delete();
    	$om->delete();
    	
    	return redirect ( '/oms' )->with ( 'success', 'OM excluída com sucesso!' );
    }
}
