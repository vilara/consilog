@extends('layouts.app')
 @section('title','Comandos')
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
 <h3>{{ __('Cadastro') }}</h3> 
 </div>
 <div class="col-md-2" align="right">
 <a href="/comandos" class="btn btn-success" >Lista</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('comandos.store') }}" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeCmdo">Nome Comando</label>
        						<input type="text" class="form-control" name="nomeCmdo"	id="nomeCmdo" placeholder="" value="{{old('nomeCmdo')}}">
        						<small id="nomeCmdo" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						<div class="form-group col-md-6" >
    							<label for="siglaCmdo">Sigla Comando</label>
        						<input type="text" class="form-control" name="siglaCmdo" id="siglaCmdo" placeholder="" value="{{old('siglaCmdo')}}">
        						<small id="siglaCmdo" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-4" >						
						    	<label for="ordem">Ordem</label>						
						        <input type="type" class="form-control" id="ordem" name="ordem" placeholder=""  value="{{old('ordem')}}">
						        <small id="ordem" class="form-text text-muted">Somente números!</small>
						   </div>
						
    						<div class="form-group col-md-4">
    							<label for="codomCmdo">Codom</label>
        						<input type="type"	class="form-control" id="codomCmdo" name="codomCmdo" placeholder=""  value="{{old('codomCmdo')}}">
        						<small id="codomCmdo"	class="form-text text-muted">Somente números!</small>
    						</div>
    						
    						<div class="form-group col-md-4">
    							<label for="codugCmdo">Codug</label>
        						<input type="type"	class="form-control" id="codugCmdo" name="codugCmdo" placeholder=""  value="{{old('codugCmdo')}}">
        						<small id="codugCmdo"	class="form-text text-muted">Somente números!</small>
    						</div>
    					
							
						</div>
						
	
                                 
                                 <hr>
						
			
						
							
							
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Cadastrar') }}
                                </button>
							
  </form> 
							
</div>
						
						
@endsection
