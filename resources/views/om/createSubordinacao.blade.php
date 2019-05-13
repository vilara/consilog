@extends('layouts.app')
 @section('title','OM')
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
 <h3>{{ __('Cadastro') }} de subordinação</h3> 
 </div>
 <div class="col-md-2" align="right">
 <a href="/oms" class="btn btn-success" >Lista</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{url('/oms/subordinacao/store')}}" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="id" value="{{$om->id}}">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="om_id">Nome OM</label>
        						<input type="text" class="form-control" name="om_id" disabled="disabled"	id="om_id" value="{{$om->siglaOm}}">
    						</div>
						
    						<div class="form-group col-md-6" >
    							<label for="comando_id">Subordinar a:</label>
    							<select class="form-control" name="comando_id" id="comando_id">
    							<option value="">Selecione abaixo...</option>
    							@foreach($cmdo as $cmdos)
    							<option value="{{$cmdos->id}}">{{$cmdos->siglaCmdo}}</option>
    							@endforeach
    							
    							</select>
    						</div>
						</div>
						
						
						
						
	
                                 
                                 <hr>
						
			
						
							
							
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Cadastrar') }}
                                </button>
							
  </form> 
							
</div>
						
						
@endsection
