@extends('layouts.app') 
@section('title','seções') 
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
 <h3>{{ __('Edição') }}</h3> 
 </div>
 <div class="col-md-2 py-auto">
 <a href="{{url('/secoes')}}" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('secoes.update', $seco->id) }}" method="post">
					 @csrf
					  @method('PATCH')
						<div class="form-row">
						
													
    						<div class="form-group col-md-6" >
    							<label for="nomeSecao">Nome seção</label>
        						<input type="text" class="form-control" name="nomeSecao"	id="nomeSecao"  value="{{$seco->nomeSecao}}">
        						<small id="nomeSecao" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
    						
    						<div class="form-group col-md-6" >
    							<label for="abrevSecao">Abreviatura da seção</label>
        						<input type="text" class="form-control" name="abrevSecao"	id="abrevSecao" placeholder="" value="{{$seco->abrevSecao}}">
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
