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
        <option value="">Elija a cual de los emisores pertenece el cliente</option>
        @foreach($emisoo as $emiso)
           <option value="{{$emiso['idEmpresa']}}">{{$emiso['NomEmpresa']}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
	{!! Form::label('RFCliente','RFC del cliente') !!}
	{!! Form::text('RFCliente', null, ['class'=> 'form-control']) !!}
    <h3>
      <a href="https://agsc.siat.sat.gob.mx/PTSC/ValidaRFC/index.jsf" target="_blank" class="btn btn-info" >Validar</a> 
    </h3>
</div>

<div class="form-group">
	{!! Form::label('NomCte','Nombre del cliente') !!}
	{!! Form::text('NomCte', null, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('CorreoCte','Correo') !!}
	{!! Form::text('CorreoCte', null, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('CP','Codigo Postal') !!}
	{!! Form::text('CP', null, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    <label for="">Pais</label>
    <select name="idPais" id="inputRegimen" class="form-control">
        <option value="">Elija el Pais</option>
        @foreach($paises as $pais)
           <option value="{{$pais['idPais']}}">{{$pais['Descripcion']}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
	{!! Form::label('NumRegIdTrib','Numero de registro de identidad fiscal') !!}
	{!! Form::text('NumRegIdTrib', null, ['class'=> 'form-control']) !!}
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