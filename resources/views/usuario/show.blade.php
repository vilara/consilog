@extends('layouts.app') 
@section('title','Usuários') 
@section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8">

			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-9">
							<h3 id="p1">{{ __('Usuário') }}</h3>
						</div>
						<div class="col-md-3 py-auto">
							<a href="../usuarios/store" class="btn btn-success">Editar</a> <a
								href="../usuarios" class="btn btn-success float-right">Voltar</a>
						</div>
					</div>
				</div>

				<div class="card-body">
					<table class="table">
						<thead class="thead-soft">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nome</th>
								<th scope="col">Função</th>
								<th scope="col">E-mail</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">{{ $usuarios->id }}</th>
								<td>{{ $usuarios->name }}</td>
								<td>{{ $usuarios->funcoe['nomeFuncao'] }}</td>
								<td>{{ $usuarios->email }}</td>
								<td></td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>

		</div>

	</div>
</div>


@endsection
