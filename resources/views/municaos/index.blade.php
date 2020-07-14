@extends('layouts.app') @section('title','Munições') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							
							<h3>{{ __('Munições') }}</h3>
						</div>
						<div class="col-md-2" align="right">
							<a href="{{ route('municaos.create') }}" class="btn btn-success">Novo
						
							
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
								<th scope="col">NEE</th>
								<th scope="col">Nome</th>
								<th scope="col">Tipo</th>
								<th scope="col">Modelo</th>
								<th scope="col">Calibre</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						
						<tbody align="center">
							@foreach ($municaos as $municao)
							<tr>
								
																	
								<td title="{{ $municao->descricao }}">{{ $municao->nee_nsm }}</td>
								<td>{{ $municao->nome }}</td>
								<td>{{ $municao->tipo }}</td>
								<td>{{ $municao->modelo }}</td>
								<td>{{ $municao->calibre }}</td>


						

								<td>
									<div class="row">
										<div class="col-md-6 pt-0">
											<a href="{{ route('municaos.edit',$municao->id) }}"	style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6">
											<form class="form-group" action="{{ route('municaos.destroy',$municao->id) }}" method="post">
												@csrf @method('DELETE')
											<button class="btn form-control pt-0" type="submit"><i class="far fa-trash-alt"></i></button>
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