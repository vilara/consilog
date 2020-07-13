@extends('layouts.app') 
@section('title','LatLong') 
@section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8">
		
		
		
		
		 <div class="card">
 <div class="card-header">
 <div class="row">
 <div class="col-md-10">
 <h3>{{ __('Localização de: ') }} {{$om->siglaOm}}</h3> 
 </div>
 <div class="col-md-2 py-auto">
 <a href="/oms" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="route('latongs.update', $latlong->id)" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeOm">Latitudes</label>
        						<input type="text" class="form-control" name="nomeOm"	id="nomeOm" disabled="disabled" value="{{$latlong->latitude}}">
        						<small id="nomeOm" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						<div class="form-group col-md-6" >
    							<label for="siglaOm">Longitude</label>
        						<input type="text" class="form-control" name="siglaOm" id="siglaOm" disabled="disabled" value="{{$latlong->longitude}}">
        						<small id="siglaOm" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						</div>
						
					
						
	
       						  <div class="row">
  <div class="col-md-2">
  <a href="{{ route('latlongs.edit',$latlong->id) }}" type="submit" class="btn btn-success">  {{ __('Editar') }}   </a>
  </div>
  <div class="col-md-1">
  <form class="form-inline" action="{{ route('latlongs.destroy',$latlong->id) }}"	method="post">
												@csrf @method('DELETE')
												<button class="btn btn-success" type="submit"  align="left"> {{ __('Excluir') }} </button>
											</form>
  </div>
  </div>			
  </form> 
							
</div>
	</div>
	
	@php
	
    	$marker['position'] = $latlong->latitude.','.$latlong->longitude;
    	$marker['infowindow_content'] = 'Brasil';
    	$marker['visible'] = true;
    	$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_spin&chld=1.0|0|F5DEB3|12|_|'.$om->siglaOm;
    	$gmap->add_marker($marker);
    	
    	$map = $gmap->create_map();
    	
	
	@endphp
	
	 {!! $map['js'] !!}
	 
	  {!! $map['html'] !!}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	

@endsection
