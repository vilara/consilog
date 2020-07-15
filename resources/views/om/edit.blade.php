@extends('layouts.app') 
@section('title','Comandos') 
@section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8">
		
		
		
		
		 <div class="card">
 <div class="card-header">
 <div class="row">
 <div class="col-md-10">
 <h3>{{ __('Edição') }}</h3> 
 </div>
 <div class="col-md-2 py-auto">
 <a href="/oms" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('oms.update', $om->id) }}" method="post">
					 @csrf
					  @method('PATCH')
					  <input type="hidden" class="form-control" name="roles" value="1">
					<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeOm">Nome OM</label>
        						<input type="text" class="form-control" name="nomeOm"	id="nomeOm" value="{{$om->nomeOm}}">
        						<small id="nomeOm" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						<div class="form-group col-md-6" >
    							<label for="siglaOm">Sigla OM</label>
        						<input type="text" class="form-control" name="siglaOm" id="siglaOm" value="{{$om->siglaOm}}">
        						<small id="siglaOm" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						</div>
						
						
						<div class="form-row">
    						
						
    						<div class="form-group col-md-4">
    							<label for="codom">Codom</label>
        						<input type="type"	class="form-control" id="codom" name="codom"  value="{{$om->codom}}">
        						<small id="codom"	class="form-text text-muted">Somente números!</small>
    						</div>
    						
    						<div class="form-group col-md-4">
    							<label for="codoug">Codug</label>
        						<input type="type"	class="form-control" id="codoug" name="codoug""  value="{{$om->codoug}}">
        						<small id="codoug"	class="form-text text-muted">Somente números!</small>
    						</div>
    					
							
						</div>
						
	        <hr>
						
			
						
							
							
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Editar') }}
                                </button>			
  </form> 
							
</div>
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	

@endsection
