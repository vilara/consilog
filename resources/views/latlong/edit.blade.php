@extends('layouts.app') 
@section('title','seções') 
@section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8">
		
		
		
		
		 <div class="card">
 <div class="card-header">
 <div class="row">
 <div class="col-md-10">
 <h3>{{ __('Edição') }}</h3> 
 </div>
 <div class="col-md-2 py-auto">
 <a href="{{url('/latlongs')}}" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('latlongs.update', $latlong->id) }}" method="post">
					 @csrf
					  @method('PATCH')
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="latitude">Latitude</label>
        						<input type="text" class="form-control" name="latitude"	id="latitude"  value="{{$latlong->latitude}}">
        						<small id="nomeSecao" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
    						
    							<div class="form-group col-md-6" >
    							<label for="longitude">Longitude</label>
        						<input type="text" class="form-control" name="longitude"	id="longitude"  value="{{$latlong->longitude}}">
        						<small id="nomeSecao" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						
						</div>
						
						
 <hr>
						
			
						
							
							
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Editar') }}
                                </button>				
  </form> 
							
</div>
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	

@endsection
