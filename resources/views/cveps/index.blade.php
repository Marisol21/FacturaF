@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Claves de Productos y Servicioas</h3>
		@include('cveps.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Clave</th>
					<th>Descripcion</th>
					<th>Palabras Similares</th>
				</thead>
               @foreach ($claves as $cve)
				<tr>
					<td>{{ $cve->ClaveProdServ}}</td>
					<td>{{ $cve->Descripcion}}</td>
					<td>{{ $cve->PalabrasSimi}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$claves->render()}}
	</div>
</div>

@endsection