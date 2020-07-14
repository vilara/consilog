<?php

namespace App\Http\Controllers;

use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;
use App\latlong;
use App\endereco;
use App\om;

class LatLongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latlongs = latlong::all();
        
        return view('latlong.index', compact('latlongs'));
//         return 'latlongs';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    	
    	$id = $request->id;
    	return view('latlong.create', compact('id'));
    }

    public function createLatlongOm($id)
    {
		
    	$end = endereco::find($id);
    	$om = om::all()->where("id",8);
    	return view('latlong.create', compact('id','om'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$latlong = new latlong();
    	$latlong->latitude = $request->latitude;
    	$latlong->longitude = $request->latitude;
    	$latlong->endereco_id = $request->id;
    	
    	$latlong->save();
    	
    	return redirect ( '/oms' )->with ( 'success', 'Coordenada inserida com sucesso!' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(latlong $latlong)
    {
    	$config = array();
    	$config['center'] = '-23.955997, -46.351073';
    	$config['zoom'] = '7';
    	$config['map_height'] = '500px';
    	$config['geocodeCaching'] = true;
    	
    	
    	$gmap = new GMaps();
    	$gmap->initialize($config);
    	
    	
    	$marker = array();
    	
    	
    	
    	
    	$map = new GMaps();
    	
    	
    	
    	$end = endereco::find($latlong->endereco_id);
    	$om = om::find($end->enderecoTipo_id);
    	return view('latlong.show', compact('latlong', 'end', 'om', 'gmap', 'map', 'marker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(latlong $latlong)
    {
    	return view('latlong.edit', compact('latlong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, latlong $latlong)
    {
    	
    	$latlong->latitude = $request->latitude;
    	$latlong->longitude = $request->longitude;
    	
    	$latlong->save();
    	
    	return redirect ( '/latlongs' )->with ( 'success', 'Coordenada editada com sucesso!' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(latlong $latlong)
    {
    	$latlong->delete();
    	return redirect ( '/latlongs' )->with ( 'success', 'Coordenada excluída com sucesso!' );
    }
}
