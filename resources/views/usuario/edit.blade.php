@extends('layouts.app')
 @section('title','Usuários')
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
 <a href="/usuarios" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" method="post" action="{{ route('usuarios.update', $usuario->id) }}">
        @method('PATCH')
        @csrf
						<div class="form-row">
    						<div class="form-group col-md-8" >
    							<label for="name">Nome Completo</label>
        						<input type="text" class="form-control" name="name"	id="name" placeholder="" value="{{$usuario->name}}">
        						<small id="nameHelp" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						<div class="form-group col-md-4">
        						<label for="nomeGuerra">Nome de Guerra</label>
        						<input type="text" class="form-control" name="nomeGuerra" id="nomeGuerra"  value="{{$usuario->nomeGuerra}}" placeholder="">
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-6" >						
						    	<label for="cpf">CPF</label>						
						        <input type="type" class="form-control" id="cpf" name="cpf" placeholder=""  value="{{$usuario->cpf}}">
						        <small id="cpfHelp" class="form-text text-muted">Somente números!</small>
						   </div>
						
    						<div class="form-group col-md-6">
    							<label for="idt">Identidade Militar</label>
        						<input type="type"	class="form-control" id="idt" name="idt" placeholder=""  value="{{$usuario->idt}}">
        						<small id="idtHelp"	class="form-text text-muted">Somente números!</small>
    						</div>
						</div>
						
						<div class="form-row">
    						<div class="form-group col-md-6">
    							<label for="email">E-mail</label>						
    						    <input type="type"	class="form-control" id="email" name="email" placeholder=""  value="{{$usuario->email}}">
								<small id="emailHelp" class="form-text text-muted">Exemplo:	principal@exemplo.com</small>
							</div>
							
    						<div class="form-group col-md-6">
    							<label for="om_id">Organização Militar</label>
    							<select class="form-control" id="om_id" name="om_id">
									<option value="{{$usuario->id}}">{{$usuario->nomeOm}}</option>
									@foreach ($om as $o)
									
									@if ($o->id==$usuario->om_id )
									<option value="{{ $o->id }}" selected="selected">{{$o->nomeOm}}</option>
									@else
									<option value="{{ $o->id }}">{{$o->nomeOm}}</option>
									@endif
									
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-row">
    						<div class="form-group col-md-6">
    							<label for="funcoe_id">Função</label>
									<select	class="form-control" id="funcoe_id" name="funcoe_id">
										<option value="">Selecione sua função</option>
											@foreach ($funcoe as $funcao)
												@if ($funcao->id== $usuario->funcoe_id )
											<option value="{{ $funcao->id }}" selected="selected">{{$funcao->nomeFuncao}}</option>
												@else
											<option value="{{ $funcao->id }}">{{$funcao->nomeFuncao}}</option>
												@endif
											@endforeach
								   </select>
							</div>
    						<div class="form-group col-md-4 mx-auto">
    							<label for="sexo">Sexo</label>
    							<div class="row  border pt-1" >
    							    <div class="form-group col-md-12">
                                        <label class="radio-inline mr-3"><input type="radio" class="form-radio-input" name="sexo" id="sexo1" value="1" @if($usuario->sexo==1) {{'checked="checked"'}} @endif>  Masculino</label>
                                        <label class="radio-inline"><input type="radio" class="form-radio-input" name="sexo" id="sexo2" value="2" @if($usuario->sexo==2) {{'checked="checked"'}} @endif>  Feminino</label>
  									</div>
                                    </div>
                                 </div>
							</div>
							
							<div class="form-row">
							
							<div class="form-group col-md-4">
										<label for="perfil">Perfil</label>
									<select class="form-control" id="perfil" name="perfil">
									@foreach ($perfi as $perfil)
											<option value="{{ $perfil->id }}">{{$perfil->tipo}}</option>
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