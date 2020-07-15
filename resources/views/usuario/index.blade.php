@extends('layouts.app') @section('title','Usuários') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							
							<h3>{{ __('Usuários') }}</h3>
						</div>
						<div class="col-md-2" align="right">
							
						
							
							</a>
						</div>
					</div>
				</div>

				<div class="card-body">

					@if(session()->get('success'))
					<div class="alert alert-success">{{ session()->get('success') }}</div>
					<br /> @endif

					<table class="table">
						<thead class="thead-soft" align="center">
							<tr>
								<th scope="col">Pg</th>
								<th scope="col">Nome Guerra</th>
								<th scope="col">Função</th>
								<th scope="col">E-mail</th>
								<th scope="col">Perfil</th>
								<th scope="col">OM</th>
								<th scope="col">Endereço</th>
								<th scope="col">Telefone</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody align="center">
						@can('update')
							@foreach ($user as $user)
							@can('view',  $user->om)
							<tr>
								<td>
							
								@foreach($postgrad as $pg)
									@if($pg->id == $user->usuarioable['postograd_id'])
							       		 {{ $pg->siglaPg }}
							        @endif
						        @endforeach
								
								</td>
								<td align="left"><a href="{{ '/usuarios/'.$user->id}}"
									style="color: inherit;">{{ $user->nomeGuerra }}</a></td>
								<td>{{ $user->funcoe['nomeFuncao'] }}</td>
								<td>{{ $user->email }}</td>
								@foreach($user->perfil as $per)
								<td>{{$per->tipo}}</td>
								@endforeach
								<td>{{ $user->om['siglaOm'] }}</td>

								<td>@forelse ($user->enderecos as $end) @if($loop->last)
									<center>
										<a href="{{ route('enderecos.show',$end->id) }}"
											style="color: inherit;" title="Visualizar endereço"><i class="fas fa-home"></i></a>
									</center> @endif @empty
									<center>
										<a href="{{ url('/usuarios/enderecos/'.$user->id) }}" style="color: red;"><i class="fas fa-home"
											title="Inserir endereço"></i></a></center>  @endforelse
								</td>


								<td>@forelse ($user->telefones as $tel) @if($loop->last)
									<center>
										<a href="{{ url('/usuarios/telefones/'.$user->id) }}"
											title="Visualizar telefones" style="color: inherit;"><i
											class="fas fa-phone"></i></a>
									</center> @endif
									 @empty
									<center>
										<a href="{{ url('/usuarios/telefones/create/'.$user->id) }}" style="color: red;"><i class="fas fa-phone"
											title="Inserir telefone"></i></a>
									</center> @endforelse
								</td>


								<td>
									<div class="row">
										<div class="col-md-6 pt-0">
											<a href="{{ route('usuarios.edit',$user->id) }}"	style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6">
											<form class="form-group" action="{{ route('usuarios.destroy',$user->id) }}"	method="post">
												@csrf @method('DELETE')
											<button class="btn form-control pt-0" type="submit"><i class="far fa-trash-alt"></i></button>
											</form>
										</div>
									</div>
								</td>
							</tr>
							@endcan
							@endforeach
						@endcan
						@cannot('update')
							<tr>
								<td>
							
								@foreach($postgrad as $pg)
									@if($pg->id == $user->usuarioable['postograd_id'])
							       		 {{ $pg->siglaPg }}
							        @endif
						        @endforeach
								
								</td>
								
								<td align="left"><a href="{{ '/usuarios/'.$user->id}}"
									style="color: inherit;">{{ $user->nomeGuerra }}</a></td>
								<td>{{ $user->funcoe['nomeFuncao'] }}</td>
								<td>{{ $user->email }}</td>
								@foreach($user->perfil as $per)
								<td>{{$per->tipo}}</td>
								@endforeach
								<td>{{ $user->om['siglaOm'] }}</td>

								<td>@forelse ($user->enderecos as $end) @if($loop->last)
									<center>
										<a href="{{ route('enderecos.show',$end->id) }}"
											style="color: inherit;" title="Visualizar endereço"><i class="fas fa-home"></i></a>
									</center> @endif @empty
									<center>
										<a href="{{ url('/usuarios/enderecos/'.$user->id) }}" style="color: red;"><i class="fas fa-home"
											title="Inserir endereço"></i></a></center>  @endforelse
								</td>


								<td>@forelse ($user->telefones as $tel) @if($loop->last)
									<center>
										<a href="{{ url('/usuarios/telefones/'.$user->id) }}"
											title="Visualizar telefones" style="color: inherit;"><i
											class="fas fa-phone"></i></a>
									</center> @endif
									 @empty
									<center>
										<a href="{{ url('/usuarios/telefones/create/'.$user->id) }}" style="color: red;"><i class="fas fa-phone"
											title="Inserir telefone"></i></a>
									</center> @endforelse
								</td>


								<td>
									<div class="row">
										<div class="col-md-6 pt-0">
											<a href="{{ route('usuarios.edit',$user->id) }}"	style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6">
											<form class="form-group" action="{{ route('usuarios.destroy',$user->id) }}"	method="post">
												@csrf @method('DELETE')
											<button class="btn form-control pt-0" type="submit"><i class="far fa-trash-alt"></i></button>
											</form>
										</div>
									</div>
								</td>
							</tr>
						@endcannot
						</tbody>
					</table>

				</div>
			</div>

		</div>

	</div>
</div>



@endsection
