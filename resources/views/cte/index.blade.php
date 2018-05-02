@extends('admin')

@section('content')
  <div class="col-sm-8">
  	<h2>
  		Listado de Clientes
  		<a href="{{ route('cliente.create') }}" class="btn btn-primary pull-right">Nuevo</a>
  	</h2>
  	<table>
  		<thead>
  			<tr>
  				<th width="20px">RFC</th>
  				<th>Nombre del Cliente</th>
  				<th colspan="3">&nbsp</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach($ctes as $cte)
  			  <tr>
  				<td>{{ $cte->RFCliente }}</td>
  				<td>{{ $cte->NomCte }}</td>
  				<td>
  					<a href="{{ route('cliente.show', $cte->idCliente) }}" class="btn btn-link">Ver</a> 
  				</td>
  				<td>
  					<a href="{{ route('cliente.edit', $cte->idCliente) }}" class="btn btn-link">Editar</a> 
  				</td>
  				<td>
            <form action="{{ route('cliente.destroy',$cte->idCliente) }}" method="POST">
               {{csrf_field() }}
               <input type="hidden" name="_method" value="DELETE">
               <button class="btn btn-link">Borrar</button>
            </form>
          </td>
  			  </tr>
  			@endforeach
  		</tbody>
  	</table>
    {!! $ctes->render() !!}
  </div>
  <div class="col-sm-4">
  	mensaje
  </div>
@endsection