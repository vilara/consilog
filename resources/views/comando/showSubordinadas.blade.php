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
							$teste = [];
							$idd = [];
						@endphp
						@foreach($cmdsu->oms as $om)
						
						@foreach ($om->enderecos as $end)
						@php
						$marker['position'] = $end->latlong['latitude'].','. $end->latlong['longitude'];
				    	$marker['infowindow_content'] = 'Brasil';
				    	$marker['visible'] = true;
				    	$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_spin&chld=1.0|0|F5DEB3|12|_|'.$om->siglaOm;
				    	$gmap->add_marker($marker);
						@endphp
						@endforeach
						
						
						
							@if($om->pivot['omds'] == 1)
						<tr><td>{{ $om->nomeOm }}</td></tr>
							@endif
						@foreach($om->comandos as $cmd)
							@if($cmd->nomeCmdo != $cmdsu->nomeCmdo)
								@php
								  $teste[] = $cmd->nomeCmdo;
								  $idd[] = $cmd->id;
								@endphp
							@endif
						@endforeach
						
								
						@endforeach
						@php $result = array_unique($teste);  $id = array_unique($idd); @endphp
						@for ($i = 0; $i < count($result); $i++)
<!-- 							<tr><td>{{ $result[$i] }}</td></tr> -->
						@endfor
			
						</tbody>
					</table>

				</div>
			</div>

		</div>

	</div>
</div>


	@php
	
	
    	
    	$map = $gmap->create_map();
    	
	
	@endphp
	
	
		 {!! $map['js'] !!}
	 
	  {!! $map['html'] !!}




@endsection
