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
 <h3>{{ __('Cadastro') }}</h3> 
 </div>
 <div class="col-md-2" align="right">
 <a href="/oms" class="btn btn-success" >Lista</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('oms.store') }}" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeOm">Nome OM</label>
        						<input type="text" class="form-control" name="nomeOm"	id="nomeOm" placeholder="" value="{{old('nomeOm')}}">
        						<small id="nomeOm" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						<div class="form-group col-md-6" >
    							<label for="siglaOm">Sigla OM</label>
        						<input type="text" class="form-control" name="siglaOm" id="siglaOm" placeholder="" value="{{old('siglaOm')}}">
        						<small id="siglaOm" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						</div>
						
						
						<div class="form-row">
    						
						
    						<div class="form-group col-md-4">
    							<label for="codom">Codom</label>
        						<input type="type"	class="form-control" id="codom" name="codom" placeholder=""  value="{{old('codom')}}">
        						<small id="codom"	class="form-text text-muted">Somente números!</small>
    						</div>
    						
    						<div class="form-group col-md-4">
    							<label for="codoug">Codug</label>
        						<input type="type"	class="form-control" id="codoug" name="codoug" placeholder=""  value="{{old('codoug')}}">
        						<small id="codoug"	class="form-text text-muted">Somente números!</small>
    						</div>
    					
							
						</div>
						
	
                                 
                                 <hr>
						
			
						
							
							
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Cadastrar') }}
                                </button>
							
  </form> 
							
</div>
						
						
@endsection
