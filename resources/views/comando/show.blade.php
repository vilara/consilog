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
					  @method('POST')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeCmdo">Nome Comando</label>
        						<input type="text" class="form-control" name="nomeCmdo"	id="nomeCmdo" disabled="disabled" value="{{$comando->nomeCmdo}}">
        						<small id="nomeCmdo" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						<div class="form-group col-md-6" >
    							<label for="siglaCmdo">Sigla Comando</label>
        						<input type="text" class="form-control" name="siglaCmdo" id="siglaCmdo" disabled="disabled" value="{{$comando->siglaCmdo}}">
        						<small id="siglaCmdo" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-4" >						
						    	<label for="ordem">Ordem</label>						
						        <input type="type" class="form-control" id="ordem" name="ordem"  disabled="disabled"  value="{{$comando->ordem}}">
						        <small id="ordem" class="form-text text-muted">Somente números!</small>
						   </div>
						
    						<div class="form-group col-md-4">
    							<label for="codomCmdo">Codom</label>
        						<input type="type"	class="form-control" id="codomCmdo" name="codomCmdo"  disabled="disabled"  value="{{$comando->codomCmdo}}">
        						<small id="codomCmdo"	class="form-text text-muted">Somente números!</small>
    						</div>
    						
    						<div class="form-group col-md-4">
    							<label for="codugCmdo">Codug</label>
        						<input type="type"	class="form-control" id="codugCmdo" name="codugCmdo" disabled="disabled"  value="{{$comando->siglaCmdo}}">
        						<small id="codugCmdo"	class="form-text text-muted">Somente números!</small>
    						</div>
    					
							
						</div>
						
	
       						  <div class="row">
  <div class="col-md-2">
  <a href="{{ route('comandos.edit',$comando->id) }}" type="submit" class="btn btn-success">  {{ __('Editar') }}   </a>
  </div>
  <div class="col-md-1">
  <form class="form-inline" action="{{ route('comandos.destroy',$comando->id) }}"	method="post">
												@csrf @method('DELETE')
												<button class="btn btn-success" type="submit"  align="left"> {{ __('Excluir') }} </button>
											</form>
  </div>
  </div>			
  </form> 
							
</div>
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	

@endsection
