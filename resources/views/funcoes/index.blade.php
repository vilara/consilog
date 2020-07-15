@extends('layouts.app') @section('title','Funções') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							
							<h3>{{ __('Funções') }}</h3>
						</div>
						<div class="col-md-2" align="right">
							<a href="{{ route('funcoes.create') }}" class="btn btn-success">Novo
						
							
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
								<th scope="col">Nome Função</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						
						<tbody align="center">
							@foreach ($funcoes as $funcao)
							<tr>
								
																	
								<td><a href="{{ route('funcoes.show',$funcao->id)}}"
									style="color: inherit;">{{ $funcao->nomeFuncao }}</a></td>


						

								<td>
									<div class="row">
										<div class="col-md-6 pt-0">
											<a href="{{ route('funcoes.edit',$funcao->id) }}"	style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6">
											<form class="form-group" action="{{ route('funcoes.destroy',$funcao->id) }}"	method="post">
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