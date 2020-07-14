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
 <a href="/comandos" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('comandos.update', $comando->id) }}" method="post">
					 @csrf
					  @method('PATCH')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeCmdo">Nome Comando</label>
        						<input type="text" class="form-control" name="nomeCmdo"	id="nomeCmdo" value="{{$comando->nomeCmdo}}">
        						<small id="nomeCmdo" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						<div class="form-group col-md-6" >
    							<label for="siglaCmdo">Sigla Comando</label>
        						<input type="text" class="form-control" name="siglaCmdo" id="siglaCmdo"  value="{{$comando->siglaCmdo}}">
        						<small id="siglaCmdo" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-4" >						
						    	<label for="ordem">Ordem</label>						
						        <input type="type" class="form-control" id="ordem" name="ordem" value="{{$comando->ordem}}">
						        <small id="ordem" class="form-text text-muted">Somente números!</small>
						   </div>
						
    						<div class="form-group col-md-4">
    							<label for="codomCmdo">Codom</label>
        						<input type="type"	class="form-control" id="codomCmdo" name="codomCmdo"  value="{{$comando->codomCmdo}}">
        						<small id="codomCmdo"	class="form-text text-muted">Somente números!</small>
    						</div>
    						
    						<div class="form-group col-md-4">
    							<label for="codugCmdo">Codug</label>
        						<input type="type"	class="form-control" id="codugCmdo" name="codugCmdo" value="{{$comando->codugCmdo}}">
        						<small id="codugCmdo"	class="form-text text-muted">Somente números!</small>
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
