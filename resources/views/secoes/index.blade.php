@extends('layouts.app') @section('title','Seções') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							
							<h3>{{ __('Seções') }}</h3>
						</div>
						<div class="col-md-2" align="right">
							<a href="{{ route('secoes.create') }}" class="btn btn-success">Novo
						
							
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
								<th scope="col">Nome Seção</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						
						<tbody align="center">
							@foreach ($seco as $secao)
							<tr>
								
																	
								<td><a href="{{ route('secoes.show',$secao->id)}}"
									style="color: inherit;">{{ $secao->nomeSecao }}</a></td>


						

								<td>
									<div class="row">
										<div class="col-md-6 pt-0">
											<a href="{{ route('secoes.edit',$secao->id) }}"	style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6">
											<form class="form-group" action="{{ route('secoes.destroy',$secao->id) }}"	method="post">
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