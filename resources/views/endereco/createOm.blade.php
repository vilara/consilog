@extends('layouts.app')

@section('title','Endereco')
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
 <h3>Endereço de {{ $om->siglaOm }}</h3> 
 </div>
 <div class="col-md-2" align="right">
 <a href="/oms" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" method="post" action="{{ route('enderecos.store') }}">
        @method('POST')
        @csrf
        				<input type="hidden" class="form-control" name="id"	 value="{{ $om->id }}" >
       					<input type="hidden" class="form-control" name="tipo" value="om" >
       					
       					<div class="form-row">
       						<div class="form-group col-md-3" >
    							<label for="cep">CEP</label>
        						<input type="text" class="form-control" name="cep"	id="cep" >
    						</div>
       					</div>
       					
						<div class="form-row">
    						<div class="form-group col-md-8" >
    							<label for="rua">Logradouro</label>
        						<input type="text" class="form-control" name="rua"	id="rua" >
    						</div>
						
    						<div class="form-group col-md-4">
        						<label for="numeroEndereco">Número</label>
        						<input type="text" class="form-control" name="numeroEndereco" id="numeroEndereco"  >
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="complemento">Complemento</label>						
						        <input type="type" class="form-control" id="complemento" name="complemento" >
						   </div>
						
    						<div class="form-group col-md-6">
    							<label for="idt">Bairro</label>
        						<input type="type"	class="form-control" id="bairro" name="bairro">
    						</div>
						</div>
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="cidade">Cidade</label>						
						        <input type="type" class="form-control" id="cidade" name="cidade" >
						   </div>
						
    						<div class="form-group col-md-2">
    							<label for="estado">Estado</label>
        						<input type="type"	class="form-control" id="estado" name="estado">
    						</div>
						</div>
						

						
						
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Inserir') }}
                                </button>
							
  </form> 
							
</div>
	</div>
	</div>
	</div>
	</div>
	

@endsection