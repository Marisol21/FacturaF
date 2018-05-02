
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
	<select name="idRegiFiscal" id="inputRegimen" class="form-control">
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
	<select name="idPais" id="inputRegimen" class="form-control">
        <option value="">Elija el Pais</option>
        @foreach($paises as $pais)
           <option value="{{$pais['idPais']}}">{{$pais['Descripcion']}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>