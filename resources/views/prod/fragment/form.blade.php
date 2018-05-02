<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Factura</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../../img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../img/favicon.ico">


<body>
<div class="form-group">
    <select name="idEmpresa" id="inputRegimen" class="form-control">
        <option value="">Elija a cual de los emisores pertenece este Producto</option>
        @foreach($emiss as $emis)
           <option value="{{$emis['idEmpresa']}}">{{$emis['NomEmpresa']}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Nombre de la Clave del servicio</label>
    <select name="idProdServ" id="inputRegimen" class="form-control">
        <option value="">Elija el nombre del producto</option>
        @foreach($prosers as $proser)
           <option value="{{$proser['idProdServ']}}">{{$proser['Descripcion']}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
	{!! Form::label('NomProd','Nombre del producto') !!}
	{!! Form::text('NomProd', null, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('DescripcionProd','Descripcion del producto') !!}
	{!! Form::text('DescripcionProd', null, ['class'=> 'form-control']) !!}
</div>


<div class="form-group">
    <label for="">Nombre de la Unidad de Medida</label>
    <select name="idUM" id="inputRegimen" class="form-control">
        <option value="">Elija la Unidad de Medida</option>
        @foreach($unis as $uni)
           <option value="{{$uni['idUM']}}">{{$uni['NomUM']}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
	{!! Form::label('Precio','Precio del producto') !!}
	{!! Form::text('Precio', null, ['class'=> 'form-control','maxlengh'=>'10']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Enviar', ['class'=> 'btn btn-primary']) !!}
</div>
   
    <!-- jQuery 2.1.4 -->
    <script src="../../js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../js/app.min.js"></script>
    
  </body>
</html>