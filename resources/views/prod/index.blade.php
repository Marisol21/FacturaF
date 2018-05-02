@extends('admin')

@section('content')
  <div class="col-sm-8">
  	<h2>
  		Listado de Productos
  		<a href="{{ route('producto.create') }}" class="btn btn-primary pull-right">Nuevo</a>
  	</h2>
    @include('prod.fragment.info')
  	<table>
  		<thead>
  			<tr>
  				<th>Nombre del Producto</th>
  				<th colspan="3">&nbsp</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach($prods as $prod)
  			  <tr>
  				<td>{{ $prod->NomProd }}</td>
  				<td>
  					<a href="{{ route('producto.show', $prod->idProd) }}" class="btn btn-link">Ver</a> 
  				</td>
  				<td>
  					<a href="{{ route('producto.edit', $prod->idProd) }}" class="btn btn-link">Editar</a> 
  				</td>
  				
  				<td>
            <form action="{{ route('producto.destroy',$prod->idProd) }}" method="POST">
               {{csrf_field() }}
               <input type="hidden" name="_method" value="DELETE">
               <button class="btn btn-link">Borrar</button>
            </form>
          </td>
  			  </tr>
  			@endforeach
  		</tbody>
  	</table>
    {!! $prods->render() !!}
  </div>
  <div class="col-sm-4">
  	@include('prod.fragment.aside')
  </div>
@endsection