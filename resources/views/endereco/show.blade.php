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
 <h3>Endereço de {{ $usu->name }}</h3> 
 </div>
 <div class="col-md-2" align="right">
 <a href="/usuarios" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" method="post" action="">
        @method('PATCH')
        @csrf
		<div class="form-row">
       						<div class="form-group col-md-3" >
    							<label for="cep">CEP</label>
        						<input type="text" class="form-control" name="cep"	id="cep" disabled="disabled" value="{{$endereco->cep}}" >
    						</div>
       					</div>
       					
						<div class="form-row">
    						<div class="form-group col-md-8" >
    							<label for="rua">Logradouro</label>
        						<input type="text" class="form-control" name="rua"	id="rua"  disabled="disabled" value="{{$endereco->rua}}">
    						</div>
						
    						<div class="form-group col-md-4">
        						<label for="numeroEndereco">Número</label>
        						<input type="text" class="form-control" name="numeroEndereco" disabled="disabled" id="numeroEndereco"  value="{{$endereco->numeroEndereco}}" >
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="complemento">Complemento</label>						
						        <input type="type" class="form-control" id="complemento" disabled="disabled" name="complemento"  value="{{$endereco->complemento}}">
						   </div>
						
    						<div class="form-group col-md-6">
    							<label for="idt">Bairro</label>
        						<input type="type"	class="form-control" id="bairro"  disabled="disabled" name="bairro" value="{{$endereco->bairro}}">
    						</div>
						</div>
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="cidade">Cidade</label>						
						        <input type="type" class="form-control" id="cidade" name="cidade" disabled="disabled"  value="{{$endereco->cidade}}">
						   </div>
						
    						<div class="form-group col-md-2">
    							<label for="estado">Estado</label>
        						<input type="type"	class="form-control" id="estado" name="estado" disabled="disabled" value="{{$endereco->estado}}">
    						</div>
						</div>
							
							
    					
					
						
						
							
							
							
  </form> 
  <div class="row">
  <div class="col-md-2">
  <a href="{{ route('enderecos.edit',$endereco->id) }}" type="submit" class="btn btn-success">  {{ __('Editar') }}   </a>
  </div>
  <div class="col-md-1">
  <form class="form-inline" action="{{ route('enderecos.destroy',$endereco->id) }}"	method="post">
												@csrf @method('DELETE')
												<button class="btn btn-success" type="submit"  align="left"> {{ __('Excluir') }} </button>
											</form>
  </div>
  </div>
							
</div>
	</div>
	</div>
	</div>
	</div>



@endsection