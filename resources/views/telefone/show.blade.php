@extends('layouts.app') 
@section('title','Telefones') 
@section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-10">

			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							<h3>{{ __('Telefones') }}</h3>
						</div>
						<div class="col-md-2 py-auto">
							<a href="../usuarios/create" class="btn btn-success">Inserir telefone</a>
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
								<th scope="col">DDD</th>
								<th scope="col">Número</th>
								<th scope="col">Tipo</th>
								<th scope="col">Seção</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($telefone as $tel)
							<tr>
								<th scope="row">{{ $tel->id }}</th>
								<td>{{ $tel->numero }}</td>
								<td>{{ $tel->tipo }}</td>
								<td>{{ $tel->secoe['nomeSecao'] }}</td>
								

								<td>
									<div class="row">
										<div class="col-md-6 mt-1">
											<a href="{{ route('telefones.edit',$tel->id) }}" style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6  text-lg-left pl-1">
											<form class="form-group" action="{{ route('telefones.destroy',$tel->id) }}"	method="post">
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