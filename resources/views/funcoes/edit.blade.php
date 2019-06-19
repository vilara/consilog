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
					  @method('PATCH')
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeFuncao">Nome Função</label>
        						<input type="text" class="form-control" name="nomeFuncao"	id="nomeFuncao"  value="{{$funcao->nomeFuncao}}">
        						<small id="nomeFuncao" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
						<div class="form-group col-md-6" >
    							<label for="abrevFuncao">Abreviatura da Função</label>
        						<input type="text" class="form-control" name="abrevFuncao"	id="abrevFuncao" placeholder="" value="{{$funcao->abrevFuncao}}">
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
