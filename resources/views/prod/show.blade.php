<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Factura</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/AdminLTE.min.css">
    <link rel="stylesheet" href="../css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../img/favicon.ico">
   
    <!-- jQuery 2.1.4 -->
    <script src="../js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../js/app.min.js"></script>
    
  </body>
</html>

@extends('admin')

@section('content')
  <div class="col-sm-8">
  	<h3>
      {{$prods->NomProd}}
      <a href="{{ route('producto.edit', $prods->idProd) }}" class="btn btn-default pull-right" >Editar</a> 
    </h3>
    <h3>
      {!! Form::label('Codigo','Codigo del producto') !!}
      {{$cvess->ClaveProdServ}}
    </h3>
    <h3>
      {!! Form::label('CodNombre','Nombre del codigo') !!}
      {{$cvess->Descripcion}}
    </h3>
    <h3>
      {!! Form::label('Descripcion','Descripcion del producto') !!}
      {{$prods->DescripcionProd}}
    </h3>
    <h3>
      {!! Form::label('UM','Unidad de medida del producto') !!}
      {{$uniss->NomUM}}
    </h3>
    <h3>
      {!! Form::label('Precio','Precio del producto') !!}
      {{$prods->Precio}}
    </h3>
  </div>
  <div class="col-sm-4">
  	@include('prod.fragment.aside')
  </div>
@endsection