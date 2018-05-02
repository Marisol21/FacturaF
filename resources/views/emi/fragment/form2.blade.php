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
    <link rel="apple-touch-icon" href="../img/apple-


<div class="form-group">
	{!! Form::label('RFCempresa','RFC de la empresa') !!}
	{!! Form::text('RFCempresa', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('NomEmpresa','Nombre de la empresa') !!}
	{!! Form::text('NomEmpresa', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	<label for="">Regimen Fiscal</label>
	<select name="RegFiscal" id="inputRegimen" class="form-control">
        <option value="regimen">Elija un regimen fiscal</option>
        @foreach($regimens as $regimen)
           <option value="{{$regimen['idRegiFiscal']}}">{{$regimen['Descripcion']}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
	{!! Form::label('CP','Codigo Postal') !!}
	{!! Form::text('CP', null, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    <label for="">Pais</label>
	<select name="Pais" id="inputRegimen" class="form-control">
        <option value="">Elija el Pais</option>
        @foreach($paises as $pais)
           <option value="{{$pais['idPais']}}">{{$pais['Descripcion']}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>

    <!-- jQuery 2.1.4 -->
    <script src="../js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../js/app.min.js"></script>
    
  </body>
</html>