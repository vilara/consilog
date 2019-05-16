@extends('layouts.app') @section('title','OM') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							
							<h3>{{ __('OM') }}</h3>
						</div>
						
						
						
						<div class="col-md-2" align="right">
							<a href="{{ route('oms.create') }}" class="btn btn-success">Novo
						
							
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
								<th scope="col">Nome OM</th>
								<th scope="col">Sigla OM</th>
								<th scope="col">Codom</th>
								<th scope="col">Codug</th>
								<th scope="col">Endereços</th>
								<th scope="col">Telefones</th>
								<th scope="col">Loc</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						
						<tbody align="center">
							@foreach ($oms as $om)
							<tr>
								
														
								<td><a href="{{ route('oms.show',$om->id)}}"
									style="color: inherit;">{{ $om->nomeOm }}</a></td>
								<td>{{ $om->siglaOm }}</td>
								<td>{{ $om->codom }}</td>
								<td>{{ $om->codoug }}</td>
								<td>@forelse ($om->enderecos as $end) @if($loop->last)
									<center>
										<a href="{{ route('enderecos.show',$end->id) }}"
											style="color: inherit;" title="Visualizar endereço"><i class="fas fa-home"></i></a>
									</center> @endif @empty
									<center>
										<a href="{{ url('/oms/enderecos/'.$om->id) }}" style="color: red;"><i class="fas fa-home"
											title="Inserir endereço"></i></a></center>  @endforelse
								</td>
								
								
									<td>@forelse ($om->telefones as $tel) @if($loop->last)
									<center>
										<a href="{{ url('/oms/telefones/'.$om->id) }}"
											title="Visualizar telefones" style="color: inherit;"><i
											class="fas fa-phone"></i></a>
									</center> @endif
									 @empty
									<center>
										<a href="{{ url('/oms/telefones/create/'.$om->id) }}" style="color: red;"><i class="fas fa-phone"
											title="Inserir telefone"></i></a>
									</center> @endforelse
								</td>

								@forelse ($om->enderecos as $end)
								@if(empty($end->latlong['latitude']))
								<td><i class="fas fa-globe-americas"  style="color: red;"></i></td>
								@else
								<td><a href="{{ route('latlongs.show',$end->latlong['id']) }}" style="color: inherit;" title="Visualizar endereço"><i class="fas fa-globe-americas"></i></a></td>
								@endif
								@empty
								<td><i class="fas fa-globe-americas"  style="color: red;"></i></td>
								 @endforelse

						

								<td>
									<div class="row">
										<div class="col-md-6 pt-0">
											<a href="{{ route('oms.edit',$om->id) }}"	style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6">
											<form class="form-group" action="{{ route('oms.destroy',$om->id) }}"	method="post">
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