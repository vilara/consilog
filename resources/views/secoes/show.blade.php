@extends('layouts.app') 
@section('title','seções') 
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
 <a href="{{url('/secoes')}}" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('secoes.update', $seco->id) }}" method="post">
					 @csrf
					  @method('POST')
					  <input type="hidden" class="form-control" name="roles" value="1">
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeSecao">Nome seção</label>
        						<input type="text" class="form-control" name="nomeSecao"	id="nomeSecao" disabled="disabled" value="{{$seco->nomeSecao}}">
        						<small id="nomeSecao" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						
						</div>
						
						
					
						
	
       						  <div class="row">
  <div class="col-md-2">
  <a href="{{ route('secoes.edit',$seco->id) }}" type="submit" class="btn btn-success">  {{ __('Editar') }}   </a>
  </div>
  <div class="col-md-1">
  <form class="form-inline" action="{{ route('secoes.destroy',$seco->id) }}"	method="post">
												@csrf @method('DELETE')
												<button class="btn btn-success" type="submit"  align="left"> {{ __('Excluir') }} </button>
											</form>
  </div>
  </div>			
  </form> 
							
</div>
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	

@endsection
