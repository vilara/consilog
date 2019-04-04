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
 <h3>{{ __('Cadastro') }}</h3> 
 </div>
 <div class="col-md-2 py-auto">
 <a href="/usuarios" class="btn btn-success">Lista</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" action="{{ route('register') }}" method="post">
					 @csrf
						<div class="form-row">
    						<div class="form-group col-md-8" >
    							<label for="name">Nome Completo</label>
        						<input type="text" class="form-control" name="name"	id="name" placeholder="" value="{{old('name')}}">
        						<small id="nameHelp" class="form-text text-muted">Sem abreviaturas!</small>
    						</div>
						
    						<div class="form-group col-md-4">
        						<label for="nomeGuerra">Nome de Guerra</label>
        						<input type="text" class="form-control" name="nomeGuerra" id="nomeGuerra"  value="{{old('nomeGuerra')}}" placeholder="">
    						</div>
						</div>
						
						
						<div class="form-row">
    						<div class="form-group col-md-4" >						
						    	<label for="cpf">CPF</label>						
						        <input type="type" class="form-control" id="cpf" name="cpf" placeholder=""  value="{{old('cpf')}}">
						        <small id="cpfHelp" class="form-text text-muted">Somente números!</small>
						   </div>
						
    						<div class="form-group col-md-4">
    							<label for="idt">Identidade Militar</label>
        						<input type="type"	class="form-control" id="idt" name="idt" placeholder=""  value="{{old('idt')}}">
        						<small id="idtHelp"	class="form-text text-muted">Somente números!</small>
    						</div>
    						
    						<div class="form-group col-md-4">
    							<label for="email">E-mail</label>						
    						    <input type="type"	class="form-control" id="email" name="email" placeholder=""  value="{{old('email')}}">
								<small id="emailHelp" class="form-text text-muted">Exemplo:	principal@exemplo.com</small>
							</div>
							
						</div>
						
						<div class="form-row">
						
						<div class="form-group col-md-5">
    							<label for="om_id">Organização Militar</label>
    							<select class="form-control" id="om_id" name="om_id">
									<option value="">Selecione sua OM</option>
									@foreach ($om as $o)
									
									@if (old('om_id')== $o->id )
									<option value="{{ $o->id }}" selected="selected">{{$o->nomeOm}}</option>
									@else
									<option value="{{ $o->id }}">{{$o->nomeOm}}</option>
									@endif
									
									@endforeach
								</select>
							</div>
						
    						<div class="form-group col-md-5 offset-md-2">
    							<label for="funcoe_id">Função</label>
									<select	class="form-control" id="funcoe_id" name="funcoe_id">
										<option value="">Selecione sua função</option>
											@foreach ($funcoe as $funcao)
												@if (old('funcoe_id')== $funcao->id )
											<option value="{{ $funcao->id }}" selected="selected">{{$funcao->nomeFuncao}}</option>
												@else
											<option value="{{ $funcao->id }}">{{$funcao->nomeFuncao}}</option>
												@endif
											@endforeach
								   </select>
							</div>
							
							</div>
							
							<div class="form-row">
    						<div class="form-group col-md-6 offset-md-3">
    							<label for="sexo">Sexo</label>
    							<div class="row  border pt-1" >
    							    <div class="form-group col-md-12 py-auto">
                              &nbsp&nbsp&nbsp&nbsp&nbsp         &nbsp&nbsp&nbsp&nbsp&nbsp  <label class="radio-inline mr-3"><input type="radio" class="form-radio-input" name="sexo" id="sexo1" value="1" @if(old('sexo')==1) {{'checked="checked"'}} @endif>  Masculino</label>
                                       &nbsp&nbsp&nbsp&nbsp&nbsp  <label class="radio-inline"><input type="radio" class="form-radio-input" name="sexo" id="sexo2" value="2" @if(old('sexo')==2) {{'checked="checked"'}} @endif>  Feminino</label>
  									</div>
                                    </div>
                                 </div>
                                 </div>
                                 
                                 <hr>
						
						<div class="form-row">
    						
							
							<div class="form-group col-md-6">
    							<label for="passsword">Senha</label>						
    						    <input type="password"	class="form-control" id="password" name="password" placeholder=""  value="{{old('password')}}">
								<small id="password" class="form-text text-muted"></small>
							</div>
							
							<div class="form-group col-md-6">
    							<label for="password-confirm">Repita a senha</label>						
    						    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
								<small id="passsword" class="form-text text-muted"></small>
							</div>
							
							
							
    						
						</div>
						
						
							
							
							
							<button type="submit" class="btn btn-success">
                                    {{ __('Cadastrar') }}
                                </button>
							
  </form> 
							
</div>
						
						
@endsection
