@extends('layouts.app')

@section('title','Telefone')
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
 <h3>Inserir telefone para {{ $usuario->name }}</h3> 
 </div>
 <div class="col-md-2" align="right">
 <a href="/usuarios" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" method="post" action="{{ route('telefones.store') }}">
        @method('POST')
        @csrf
        				<input type="hidden" class="form-control" name="id"	 value="{{ $usuario->id }}" >
       					<input type="hidden" class="form-control" name="tipo" value="usuario" >
       					
						<div class="form-row">
    						<div class="form-group col-md-4" >
    							<label for="ddd">DDD</label>
        						<input type="text" class="form-control" name="ddd"	id="ddd"
        						 value="{{old('ddd')}}"
        						 >
    						</div>
						
    						<div class="form-group col-md-8">
        						<label for="numero">Número</label>
        						<input type="text" class="form-control" name="numero" id="numero" value="{{old('numero')}}">
    						</div>
						</div>
						
						
						
						
						<div class="form-row">
    						
							
							<div class="form-group col-md-6">
    							<label for="telTipo_id">Tipo</label>
    							<select class="form-control" id="tipotel_id" name="tipotel_id">
    									<option value="">Selecione...</option>
										@foreach ($telTipo as $tipo)
    									@if (old('tipotel_id') == $tipo->id )
										<option value="{{ $tipo->id }}" selected="selected">{{$tipo->telTipo}}</option>
										@else
										<option value="{{ $tipo->id }}">{{$tipo->telTipo}}</option>
										@endif
										@endforeach
									</select>
							</div>
							
							<div class="form-group col-md-6">
    							<label for="estado">Seção</label>
	    							<select class="form-control" id="secoe_id" name="secoe_id">
    									<option value="">Selecione...</option>
										@foreach ($secao as $sec)
										@if (old('secoe_id') == $sec->id )
										<option value="{{ $sec->id }}" selected="selected">{{$sec->nomeSecao}}</option>
										@else
										<option value="{{ $sec->id }}">{{$sec->nomeSecao}}</option>
										@endif
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