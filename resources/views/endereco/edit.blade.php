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
 <h3>Editar endereço </h3> 
 </div>
 <div class="col-md-2" align="right">
 <a href="/usuarios" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" method="post" action="{{ route('enderecos.update', $endereco->id) }}">
        @method('PATCH')
        @csrf
      					<div class="form-row">
       						<div class="form-group col-md-3" >
    							<label for="cep">CEP</label>
        						<input type="text" class="form-control" name="cep"	id="cep" value="{{$endereco->cep}}" >
    						</div>
       					</div>
       					
						<div class="form-row">
    						<div class="form-group col-md-8" >
    							<label for="rua">Logradouro</label>
        						<input type="text" class="form-control" name="rua"	id="rua"  value="{{$endereco->rua}}">
    						</div>
						
    						<div class="form-group col-md-4">
        						<label for="numeroEndereco">Número</label>
        						<input type="text" class="form-control" name="numeroEndereco" id="numeroEndereco"  value="{{$endereco->numeroEndereco}}" >
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="complemento">Complemento</label>						
						        <input type="type" class="form-control" id="complemento" name="complemento"  value="{{$endereco->complemento}}">
						   </div>
						
    						<div class="form-group col-md-6">
    							<label for="idt">Bairro</label>
        						<input type="type"	class="form-control" id="bairro" name="bairro" value="{{$endereco->bairro}}">
    						</div>
						</div>
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="cidade">Cidade</label>						
						        <input type="type" class="form-control" id="cidade" name="cidade"  value="{{$endereco->cidade}}">
						   </div>
						
    						<div class="form-group col-md-2">
    							<label for="estado">Estado</label>
        						<input type="type"	class="form-control" id="estado" name="estado" value="{{$endereco->estado}}">
    						</div>
						</div>
							
    					
					
						
						
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Editar') }}
                                </button>
							
  </form> 
							
</div>
	</div>
	</div>
	</div>
	</div>



@endsection