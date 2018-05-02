@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Unidad de Medida</h3>
		@include('unim.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Clave</th>
					<th>Nombre</th>
					<th>Simbolo</th>
				</thead>
               @foreach ($unidades as $uni)
				<tr>
					<td>{{ $uni->ClaveU}}</td>
					<td>{{ $uni->NomUM}}</td>
					<td>{{ $uni->Simbolo}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$unidades->render()}}
	</div>
</div>

@endsection