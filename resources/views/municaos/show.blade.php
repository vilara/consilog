@extends('layouts.app') 
@section('title','Funções') 
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
 <a href="{{url('/funcoes')}}" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('funcoes.update', $funcao->id) }}" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeFuncao">Nome Função</label>
        						<input type="text" class="form-control" name="nomeFuncao"	id="nomeFuncao" disabled="disabled" value="{{$funcao->nomeFuncao}}">
        						<small id="nomeFuncao" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						<div class="form-group col-md-6" >
    							<label for="abrevFuncao">Abreviatura da Função</label>
        						<input type="text" class="form-control" name="abrevFuncao"	id="abrevFuncao" disabled="disabled" value="{{$funcao->abrevFuncao}}">
    						</div>
    						
						</div>
						
						
					
						
	
       						  <div class="row">
  <div class="col-md-2">
  <a href="{{ route('funcoes.edit',$funcao->id) }}" type="submit" class="btn btn-success">  {{ __('Editar') }}   </a>
  </div>
  <div class="col-md-1">
  <form class="form-inline" action="{{ route('funcoes.destroy',$funcao->id) }}"	method="post">
												@csrf @method('DELETE')
												<button class="btn btn-success" type="submit"  align="left"> {{ __('Excluir') }} </button>
											</form>
  </div>
  </div>			
  </form> 
							
</div>
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	

@endsection
