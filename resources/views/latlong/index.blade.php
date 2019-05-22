@extends('layouts.app') @section('title','LatLong') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							
							<h3>{{ __('Coordenadas') }}</h3>
						</div>
						<div class="col-md-2" align="right">
							<a href="{{ route('latlongs.create') }}" class="btn btn-success">Novo
						
							
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
								<th scope="col">Latitude</th>
								<th scope="col">Longitude</th>
								<th scope="col">OM</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						
						<tbody align="center">
							@foreach ($latlongs as $latlong)
							<tr>
								
																	
								<td>{{ $latlong->latitude }}</td>
									
								<td>{{ $latlong->longitude }}</td>
								
									
									@php
								  $end = App\endereco::find($latlong->endereco_id);
								  $om = App\om::find($end['enderecoTipo_id']);
									@endphp
						
								<td>{{ $om['nomeOm'] }}</td>

								<td>
									<div class="row">
										<div class="col-md-6 pt-0">
											<a href="{{ route('latlongs.edit',$latlong->id) }}"	style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6">
											<form class="form-group" action="{{ route('latlongs.destroy',$latlong->id) }}"	method="post">
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