@extends('layouts.app') 
@section('title','Telefones') 
@section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-10">

			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h3>{{ __('Telefones') }} de {{ $om->siglaOm }}</h3>
						</div>
						<div class="col-md-6"  align="right">
						<a href="/oms" class="btn btn-success">Voltar</a>
							<a href="{{ url('/oms/telefones/create/'.$om->id) }}" class="btn btn-success border">Novo</a>
						</div>
					</div>
				</div>

				<div class="card-body">

					@if(session()->get('success'))
					<div class="alert alert-success">{{ session()->get('success') }}</div>
					<br /> @endif

					<table class="table" align="center">
						<thead class="thead-soft" align="center">
							<tr>
								<th scope="col">DDD</th>
								<th scope="col">Número</th>
								<th scope="col">Tipo</th>
								<th scope="col">Seção</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($telefones as $tel)
							<tr>
								<td align="center">{{ $tel->ddd }}</td>
								<td align="center">{{ $tel->numero }}</td>
								<td align="center">{{ $tel->tipoTel['telTipo'] }}</td>
								<td align="center">{{ $tel->secoe['nomeSecao'] }}</td>

								<td>
									<div class="row">
										<div class="col-md-6 pt-1" align="right">
											<a href="{{ route('telefones.edit',$tel->id) }}" style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6">
											<form class="form-group" action="{{ route('telefones.destroy',$tel->id) }}"	method="post">
												@csrf @method('DELETE')
												<button class="btn form-control" type="submit"  align="left"><i class="far fa-trash-alt"></i></button>
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