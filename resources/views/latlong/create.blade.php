@extends('layouts.app')
 @section('title','Latlongs')
  @section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

@if (count($errors) > 0)

@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@endif

 <div class="card">
 <div class="card-header">
 <div class="row">
 <div class="col-md-10">
 

 <h3>Cadastrar localização de {{ $om->siglaOm}}</h3> 
 </div>
 <div class="col-md-2" align="right">
 <a href="{{url('/latlongs')}}" class="btn btn-success" >Lista</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('latlongs.store') }}" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="id" value="{{$id}}">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="latitude">Latitude</label>
        						<input type="text" class="form-control" name="latitude"	id="latitude" placeholder="" value="{{old('latitude')}}">
    						</div>
						
    						<div class="form-group col-md-6" >
    							<label for="longitude">Longitude</label>
        						<input type="text" class="form-control" name="longitude"	id="longitude" placeholder="" value="{{old('longitude')}}">
    						</div>
    					
						</div>
						
				
						
	
                                 
                                 <hr>
						
			
						
							
							
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Cadastrar') }}
                                </button>
							
  </form> 
							
</div>
						
						
@endsection
