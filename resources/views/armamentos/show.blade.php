@extends('layouts.app') 
@section('title','Armamento') 
@section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8">
		
		
		
		
		 <div class="card">
 <div class="card-header">
 <div class="row">
 <div class="col-md-10">
 <h3>{{ __('Visualização') }}</h3> 
 </div>
 <div class="col-md-2 py-auto">
 <a href="{{route('armamentos.index')}}" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('armamentos.update', $armamento->id) }}" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nome">Nome</label>
        						<input type="text" class="form-control" name="nome"	id="nome" disabled="disabled" value="{{$armamento->nome}}">
    						</div>
    						
    												
    						<div class="form-group col-md-6" >
    							<label for="descricao">Descrição</label>
        						<textarea rows="5" cols="5" type="text" class="form-control" name="descricao"	id="descricao" disabled="disabled">{{$armamento->descricao}}</textarea>
    						</div>
    						
    						<div class="form-group col-md-6" >
    							<label for="fabricante">Fabricante</label>
        						<input type="text" class="form-control" name="fabricante"	id="fabricante" disabled="disabled" value="{{$armamento->fabricante}}">
    						</div>
    						
    						<div class="form-group col-md-6" >
    							<label for="modelo">Modelo</label>
        						<input type="text" class="form-control" name="modelo"	id="modelo" disabled="disabled" value="{{$armamento->modelo}}">
    						</div>
    						
    						<div class="form-group col-md-6" >
    							<label for="nee_nsm">NEE</label>
        						<input type="text" class="form-control" name="nee_nsm"	id="nee_nsm" disabled="disabled" value="{{$armamento->nee_nsm}}">
    						</div>
						
    						
						</div>
					
						
	
       						  <div class="row">
  <div class="col-md-2">
  <a href="{{ route('armamentos.edit',$armamento->id) }}" type="submit" class="btn btn-success">  {{ __('Editar') }}   </a>
  </div>
  <div class="col-md-1">
  <form class="form-inline" action="{{ route('armamentos.destroy',$armamento->id) }}"	method="post">
												@csrf @method('DELETE')
												<button class="btn btn-success" type="submit"  align="left"> {{ __('Excluir') }} </button>
											</form>
  </div>
  </div>			
  </form> 
							
</div>
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	

@endsection
