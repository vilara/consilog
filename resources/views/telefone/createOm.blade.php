@extends('layouts.app')

@section('title','OM')
 @section('content')


<div class="container">

<div class="row justify-content-center">

<div class="col-md-6">

@if (count($errors) > 0)

@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@endif

 <div class="card">
 <div class="card-header">
 <div class="row">
 <div class="col-md-10">
 <h3>Inserir telefone para {{ $om->siglaOm }}</h3> 
 </div>
 <div class="col-md-2" align="right">
 <a href="/oms" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" method="post" action="{{ route('telefones.store') }}">
        @method('POST')
        @csrf
        				<input type="hidden" class="form-control" name="id"	 value="{{ $om->id }}" >
       					<input type="hidden" class="form-control" name="tipo" value="om" >
       					
						<div class="form-row">
    						<div class="form-group col-md-4" >
    							<label for="ddd">DDD</label>
        						<input type="text" class="form-control" name="ddd"	id="ddd" >
    						</div>
						
    						<div class="form-group col-md-8">
        						<label for="numero">Número</label>
        						<input type="text" class="form-control" name="numero" id="numero"  >
    						</div>
						</div>
						
						
						
						
						<div class="form-row">
    						
							
							<div class="form-group col-md-6">
    							<label for="telTipo_id">Tipo</label>
    							<select class="form-control" id="tipotel_id" name="tipotel_id">
										@foreach ($telTipo as $tipo)
										<option value="{{ $tipo->id }}">{{$tipo->telTipo}}</option>
										@endforeach
									</select>
							</div>
							
							<div class="form-group col-md-6">
    							<label for="estado">Seção</label>
	    							<select class="form-control" id="secoe_id" name="secoe_id">
										@foreach ($secao as $sec)
										<option value="{{ $sec->id }}">{{$sec->nomeSecao}}</option>
										@endforeach
									</select>
							</div>
							</div>
							
    					
					
						
						
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Inserir') }}
                                </button>
							
  </form> 
							
</div>
	</div>
	</div>
	</div>
	</div>



@endsection