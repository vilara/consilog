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
						@php
							$teste = array();
						@endphp
						@foreach($cmdsu->oms as $om)
								@if($om->pivot['omds'] == 1)
							<tr><td>{{ $om->nomeOm }}</td></tr>
								@elseif($om->pivot['omds'] == 0)
								@php 
								$teste =	App\om::find(7)->comandos()->get();
								@endphp
								@endif
						@endforeach
						@for ($i = 0; $i < count($teste); $i++)
   							<tr><td>
   							
   							
   							<table class="table table-bordered">
								<thead class="thead-soft" align="center">
								<tr>
								<th scope="col"><a href="{{ url('/comandos/subordinados/'.$teste[$i]->id) }}">{{ $teste[$i]->nomeCmdo }}</th>
							</tr>
						</thead>

						<tbody align="center">
   							<tr><td>teste</td></tr>
   						</tbody>
   						</table>	
   							
   							</td></a></tr>
						@endfor
						</tbody>
					</table>

				</div>
			</div>

		</div>

	</div>
</div>





@endsection
