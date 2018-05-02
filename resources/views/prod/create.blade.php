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
      Nuevo producto
      <a href="{{ route('producto.index') }}" class="btn btn-default pull-righ" >Volver</a> 
    </h3>
      @include('prod.fragment.error')

    {!! Form::open(['route'=> ['producto.store']]) !!}

       @include('prod.fragment.form')

    {!! Form::close() !!}
  </div>
  <div class="col-sm-4">
    @include('prod.fragment.aside')
  </div>
@endsection