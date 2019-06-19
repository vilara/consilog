@extends('layouts.app')
 @section('title','Funções')
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
 <a href="{{url('/funcoes')}}" class="btn btn-success" >Lista</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('funcoes.store') }}" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeFuncao">Nome Função</label>
        						<input type="text" class="form-control" name="nomeFuncao"	id="nomeFuncao" placeholder="" value="{{old('nomeFuncao')}}">
        						<small id="nomeFuncao" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    					
    						<div class="form-group col-md-6" >
    							<label for="abrevFuncao">Abreviatura da Função</label>
        						<input type="text" class="form-control" name="abrevFuncao"	id="abrevFuncao" placeholder="" value="{{old('abrevFuncao')}}">
    						</div>
						
						</div>
						
				
						
	
                                 
                                 <hr>
						
			
						
							
							
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Cadastrar') }}
                                </button>
							
  </form> 
							
</div>
						
						
@endsection
