@extends('layouts.app')

@section('title','Endereco')
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
 <h3>{{ __('Edição') }} do endereço de {{ $usu->name }}</h3> 
 </div>
 <div class="col-md-2 py-auto">
 <a href="/usuarios" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" method="post" action="{{ route('enderecos.update', $endereco->id) }}">
        @method('PATCH')
        @csrf
						<div class="form-row">
    						<div class="form-group col-md-8" >
    							<label for="rua">Logradouro</label>
        						<input type="text" class="form-control" name="rua"	id="rua" placeholder="" value="{{$endereco->rua}}">
    						</div>
						
    						<div class="form-group col-md-4">
        						<label for="numeroEndereco">Número</label>
        						<input type="text" class="form-control" name="numeroEndereco" id="numeroEndereco"  value="{{$endereco->numeroEndereco}}" placeholder="">
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="cpf">Complemento</label>						
						        <input type="type" class="form-control" id="complemento" name="complemento" placeholder=""  value="{{$endereco->complemento}}">
						   </div>
						
    						<div class="form-group col-md-6">
    							<label for="idt">Bairro</label>
        						<input type="type"	class="form-control" id="bairro" name="bairro" placeholder=""  value="{{$endereco->bairro}}">
    						</div>
						</div>
						
						<div class="form-row">
    						<div class="form-group col-md-6">
    							<label for="cep">CEP</label>						
    						    <input type="type"	class="form-control" id="cep" name="cep" placeholder=""  value="{{$endereco->cep}}">
							</div>
							
							<div class="form-group col-md-4">
    							<label for="cidade">Cidade</label>
    							<select class="form-control" id="cidade" name="cidade">
									@foreach ($cidade as $cid)
									
									@if ($cid->id==$endereco->cidade_id )
									<option value="{{ $cid->id }}" selected="selected">{{$cid->nomeCidade}}</option>
									@else
									<option value="{{ $cid->id }}">{{$cid->nomeCidade}}</option>
									@endif
									
									@endforeach
								</select>
							</div>
							
							<div class="form-group col-md-2">
    							<label for="estado">Cidade</label>
	    							<select class="form-control" id="estado" name="estado">
										@foreach ($estado as $est)
										@if ($est->id==$endereco->cidade->estado['id'] )
										<option value="{{ $est->id }}" selected="selected">{{$est->siglaEstado}}</option>
										@else
										<option value="{{ $est->id }}">{{$est->siglaEstado}}</option>
										@endif
										
										@endforeach
									</select>
							</div>
							</div>
							
    					
					
						
						
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Editar') }}
                                </button>
							
  </form> 
							
</div>
	</div>
	</div>
	</div>
	</div>



@endsection