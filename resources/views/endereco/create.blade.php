@extends('layouts.app')

@section('title','Endereco')
 @section('content')


<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<!-- @if (count($errors) > 0) -->

<!-- @foreach ($errors->all() as $error) -->
<!-- <p class="alert alert-danger">{{ $error }}</p> -->
<!-- @endforeach -->
<!-- @endif -->

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
 
 <form class="form-horizontal" method="post" action="{{ route('enderecos.store') }}">
        @method('POST')
        @csrf
        				<input type="hidden" class="form-control" name="id"	 value="{{ $usu->id }}" >
       					<input type="hidden" class="form-control" name="tipo" value="usuario" >
       					
       					<div class="form-row">
       						<div class="form-group col-md-3" >
    							<label for="cep">CEP</label>
        						<input type="text" class="form-control {{ $errors->has('cep') ? ' is-invalid' : '' }}" name="cep"	id="cep" value="{{old('cep')}}">
    						 @if ($errors->has('cep'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cep') }}</strong>
                                    </span>
                                @endif
    						
    						</div>
       					</div>
       					
						<div class="form-row">
    						<div class="form-group col-md-8" >
    							<label for="rua">Logradouro</label>
        						<input type="text" class="form-control {{ $errors->has('rua') ? ' is-invalid' : '' }}" name="rua"	id="rua" value="{{old('rua')}}">
    							 @if ($errors->has('cep'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rua') }}</strong>
                                    </span>
                                @endif
    							<small id="ruaHelp" class="form-text text-muted">Preencher com o nome da rua, avenida, estrada, etc...</small>
    						</div>
						
    						<div class="form-group col-md-4">
        						<label for="numeroEndereco">Número</label>
        						<input type="text" class="form-control {{ $errors->has('numeroEndereco') ? ' is-invalid' : '' }}" name="numeroEndereco" id="numeroEndereco" value="{{old('numeroEndereco')}}" >
    							 @if ($errors->has('numeroEndereco'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numeroEndereco') }}</strong>
                                    </span>
                                @endif
    							<small id="cepHelp" class="form-text text-muted">Se não houver número favor preencher S/N</small>
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="complemento">Complemento</label>						
						        
						        <input type="type" class="form-control {{ $errors->has('complemento') ? ' is-invalid' : '' }}" id="complemento" name="complemento" value="{{old('complemento')}}" >
						    @if ($errors->has('complemento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('complemento') }}</strong>
                                    </span>
                                @endif</div>
						
    						<div class="form-group col-md-6">
    							<label for="idt">Bairro</label>
        						
        						<input type="type"	class="form-control {{ $errors->has('bairro') ? ' is-invalid' : '' }}" id="bairro" name="bairro" value="{{old('bairro')}}">
    						 @if ($errors->has('bairro'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bairro') }}</strong>
                                    </span>
                                @endif
    						</div>
						</div>
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="cidade">Cidade</label>						
						        <input type="type" class="form-control {{ $errors->has('cidade') ? ' is-invalid' : '' }}" id="cidade" name="cidade" value="{{old('cidade')}}">
						   @if ($errors->has('cidade'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                                @endif
						   </div>
						
    						<div class="form-group col-md-2">
    							<label for="estado">Estado</label>
        						<input type="type"	class="form-control {{ $errors->has('estado') ? ' is-invalid' : '' }}" id="estado" name="estado"  value="{{old('estado')}}">
    						 @if ($errors->has('estado'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
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