@extends('layouts.app')
 @section('title','Seções')
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
 <a href="{{url('/secoes')}}" class="btn btn-success" >Lista</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('secoes.store') }}" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeSecao">Nome seção</label>
        						<input type="text" class="form-control" name="nomeSecao"	id="nomeSecao" placeholder="" value="{{old('nomeSecao')}}">
        						<small id="nomeSecao" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    					
						</div>
						
				
						
	
                                 
                                 <hr>
						
			
						
							
							
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Cadastrar') }}
                                </button>
							
  </form> 
							
</div>
						
						
@endsection
