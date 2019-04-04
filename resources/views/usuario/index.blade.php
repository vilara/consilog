@extends('layouts.app') @section('title','Usuários') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-10">

			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							<h3>{{ __('Usuários') }}</h3>
						</div>
						<div class="col-md-2 py-auto">
							<a href="../usuarios/create" class="btn btn-success">Novo</a>
						</div>
					</div>
				</div>

				<div class="card-body">

					@if(session()->get('success'))
					<div class="alert alert-success">{{ session()->get('success') }}</div>
					<br /> @endif

					<table class="table">
						<thead class="thead-soft">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nome</th>
								<th scope="col">Função</th>
								<th scope="col">E-mail</th>
								<th scope="col">Perfil</th>
								<th scope="col">OM</th>
								<th scope="col">Endereço</th>
								<th scope="col">Telefone</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($user as $usuario)
							<tr>
								<th scope="row">{{ $usuario->id }}</th>
								<td><a href="{{ '/usuarios/'.$usuario->id}}"
									style="color: inherit;">{{ $usuario->name }}</a></td>
								<td>{{ $usuario->funcoe['nomeFuncao'] }}</td>
								<td>{{ $usuario->email }}</td>

								<td>@foreach ($usuario->perfils as $perfil) {{ $perfil->tipo }}
									@endforeach</td>
								<td>{{ $usuario->om['siglaOm'] }}</td>

								<td>@foreach ($usuario->enderecos as $end)
										<center><a href="{{ route('enderecos.edit',$end->id) }}" style="color: inherit;"><i class="fas fa-home"></i></a></center>
										
									@endforeach
								</td>
								
								@if(empty($usuario->enderecos))
								<td>teste</td>
								@endif
								
								<td>@foreach ($usuario->telefones as $tel)
								@if($tel->id > 0)
										<center><a href="{{ route('telefones.show', $tel->id) }}" style="color: inherit;"><i class="fas fa-phone"></i></a></center>
								@else
								
								@endif	
									@endforeach
								</td>


								<td>
									<div class="row">
										<div class="col-md-6 mt-1">
											<a href="{{ route('usuarios.edit',$usuario->id) }}" style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6  text-lg-left pl-1">
											<form class="form-group" action="{{ route('usuarios.destroy',$usuario->id) }}"	method="post">
												@csrf @method('DELETE')
												<button class="btn form-control" type="submit"><i class="far fa-trash-alt"></i></button>
											</form>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>

		</div>

	</div>
</div>



@endsection
