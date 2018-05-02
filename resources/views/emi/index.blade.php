@extends('admin')

@section('content')
  <div class="col-sm-8">
  	<h2>
  		Emisor de Factura
      <a href="{{ route('emisor.create') }}" class="btn btn-primary pull-right">Nuevo</a>
  	</h2>
    @include('emi.fragment.info')
  	<table>
  		<thead>
  			<tr>
  				<th width="20px">RFC EMISOR</th>
  				<th>Nombre de la Empresa</th>
  				<th colspan="3">&nbsp</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach($emis as $emi)
  			  <tr>
  				<td>{{ $emi->RFCempresa }}</td>
  				<td>{{ $emi->NomEmpresa }}</td>
  				<td>
  					<a href="{{ route('emisor.show', $emi->idEmpresa) }}" class="btn btn-link">Ver</a> 
  				</td>
  				<td>
  					<a href="{{ route('emisor.edit', $emi->idEmpresa) }}" class="btn btn-link">Editar</a> 
  				</td>
          <td>
            <form action="{{ route('emisor.destroy',$emi->idEmpresa) }}" method="POST">
               {{csrf_field() }}
               <input type="hidden" name="_method" value="DELETE">
               <button class="btn btn-link">Borrar</button>
            </form>
          </td>
  			  </tr>
  			@endforeach
  		</tbody>
  	</table>
    {!! $emis->render() !!}

  </div>
  <div class="col-sm-4">
  	@include('emi.fragment.aside')
  </div>
@endsection
