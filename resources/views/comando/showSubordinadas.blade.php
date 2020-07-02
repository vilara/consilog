@extends('layouts.app') @section('title','Comandos') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">

			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-6">

							<h3>{{ __('OMDS do(a)') }} {{$cmdsu->nomeCmdo}}</h3>
						</div>

						<div class="col-md-2" align="right">
							<a href="{{ route('comandos.index') }}" class="btn btn-success">Voltar


							</a>
						</div>
					</div>
				</div>

				<div class="card-body">

					@if(session()->get('success'))
					<div class="alert alert-success">{{ session()->get('success') }}</div>
					<br /> @endif

					<table class="table table-bordered">
						<thead class="thead-soft" align="center">
							<tr>
								<th scope="col">Organizações Militares</th>
							</tr>
						</thead>

						<tbody align="center">
						@foreach($cmdsu->oms as $om)
							@if(($om->comandos->where('id', $cmdsu->id)->where('pivot.omds', 1))->isNotEmpty())
							<tr>
								<td>{{$om->nomeOm}}</th>
							</tr>
							@endif
						@endforeach
						</tbody>
					</table>

				</div>
			</div>

		</div>

	</div>
</div>







@endsection
