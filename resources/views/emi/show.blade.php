@extends('vist.administrador')

@section('content')
  <div class="col-sm-8">
  	<h3>
      {!! Form::label('RFCempresa','RFC de la empresa') !!}
      {{$emis->RFCempresa}}
      <a href="{{ route('emisor.edit', $emis->idEmpresa) }}" class="btn btn-primary pull-right" >Editar</a> 
    </h3>
    <h3>
      {!! Form::label('nomempresa','Nombre de la empresa') !!}
      {{$emis->NomEmpresa}}
    </h3>
    <h3>
      {!! Form::label('Cvefis','Clave del Regimen fiscal') !!}
      {{$regimenes->ClaveRegFiscal}}</h3>
      <h3>
      {!! Form::label('regfis','Regimen fiscal') !!}
      {{$regimenes->Descripcion}}
    </h3>
    <h3>
      {!! Form::label('codpos','Codigo postal') !!}
      {{$emis->CP}}
    </h3>
    <h3>
      {!! Form::label('pais','Clave del Pais') !!}
      {{$paiss->ClavePais}}
    </h3>
    <h3>
      {!! Form::label('pais','Pais') !!}
      {{$paiss->Descripcion}}
    </h3>
  </div>
  <div class="col-sm-4">
    @include('emi.fragment.aside')
  </div>
@endsection 