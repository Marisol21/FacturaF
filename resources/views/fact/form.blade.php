<body>
	<form class="form-control" name="Datos" id="Datos" >
       <div class="form-row">
           <h5>CFDI</h5>
        </div>
	     <div class="form-row" name="cfdi">
          <div class="form-group col-md-2">
            <label>Serie</label>
            <input type="text" name='Serie' class="form-control" placeholder="Serie de factura" maxlength="13">
          </div>
          <div class="form-group col-md-1.5">
            <label>Folio</label>
            <input type="text" name='Folio' class="form-control" placeholder="Folio factura">
          </div>
          <div class="form-group col-md-1.5">
            <label >Fecha</label>
            <input type="text" name='Fecha' class="form-control" placeholder="Fecha">
          </div>
          <div class="form-group col-md-1.5">
            <label >Tipo  Comprobante</label>
            <input type="text" name='TipoComprobante' class="form-control" placeholder="Fecha">
          </div>
          <div class="form-group col-md-1.5">
            <label >Lugar expedicion</label>
            <input type="text" name='LugarExpedicion' class="form-control" placeholder="Fecha">
          </div>
        </div>
        <div class="form-row">
          <h5>Datos del Emisor</h5>
        </div>



        <select name="idEmpresa" id="selectemisor" class="form-control">
          @foreach($emiss as $emis)
            <option name="optionemisor" id="optionemisor" value="{{$emis['idEmpresa']}}">{{$emis['NomEmpresa']}}</option>
          @endforeach
        </select>
            




        <div class="form-row" name="emisor" id="emisor">
          <div class="form-group col-md-4">
            <label>RFC</label>
            <input type="text" class="form-control" name="rfcemisor" id="rfcemisor"  maxlength="13">
          </div>
          <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" >
          </div>
          <div class="form-group col-md-4">
            <label >Regimen Fiscal</label>
            <input type="text" class="form-control" name="regimen" id="regimen" >
          </div>
        </div>
        <div class="form-row">
          <h5> Datos Receptor</h5>
        </div>



        <select name="selectcte" id="selectcte" class="form-control">
          <option value="">Elija al cliente</option>
          @foreach($ctess as $ctes)
            <option value="{{$ctes['idCliente']}}">{{$ctes['NomCte']}}</option>
          @endforeach
        </select>



        <div class="form-row" name="receptor">
          <div class="form-group col-md-4">
            <label>RFC</label>
            <input type="text" class="form-control" placeholder="RFC" maxlength="13">
          </div>
          <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="text" class="form-control" placeholder="Nombre">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Recidencia Fiscal</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Dirección">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Num. Registro Id.Trubitario</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="NumRegIdTrib">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Uso CFDI</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="USO">
          </div>
        </div>
        <div class="form-row">
          <h5> Datos Conceptos</h5>
        </div>
        <div class="form-row" name="conceptos">
          <div class="form-row" name="botones">
             <INPUT type="button" class="btn-info" value="Nuevo" onclick="addRow('dataTable');" />
             <INPUT type="button" class="btn-info" value="Eliminar" onclick="deleteRow('dataTable');" />
             <INPUT type="button" class="btn-info" value="Impuesto" onclick="impuestoRow('dataTable');" />
          </div>
          <div class="form-row">
          <TABLE id="dataTable" width="200px" border="1" class="table-bordered">
              <tr>
                <td></td>
                <td><label>Clave</label></td>
                <td><label >Cantidad</label></td>
                <td><label>Clave de unidad</label></td>
                <td><label >Unidad</label></td>
                <td><label>Descripcion</label></td>
                <td><label >Valor Unitario</label></td>
                <td><label>Importe</label></td>
                <td><label >Descuento</label></td>
              </tr>       
                  <TR>
                       <TD><INPUT type="checkbox" NAME="chk"/></TD>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                  </TR>
          </TABLE>
           </div>
        <div class="form-group" id="tipoimpuesto">
             <label name="no" id="no">Elija un impuesto</label>
             <option type="checkbox" name="retenidoselect" id="retenidoselect" >Retenido</option>
             <option type="checkbox" name="trasladoselect" id="trasladoselect" >Traslado</option>
        </div>

      </div>

         <div class="form-row" id="tableimpuestos">
          <TABLE id="impuestosTable" width="200px" border="1" class="table-bordered">
              <tr>
                <td><label>Impuesto</label></td>
                <td><label>Base</label></td>
                <td><label>TipoFactor</label></td>
                <td><label>Tasa o cuota</label></td>
              </tr>       
                  <TR>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                       <TD> <INPUT type="text" /> </TD>
                  </TR>
          </TABLE>
         </div>
   
         <div class="form-row" id="total">
            <div class="form-group col-md-4">
             <label>Moneda</label>
             <input name="moneda" type="text" class="form-control" placeholder="Moneda" maxlength="13">
           </div>
           <div class="form-group col-md-4">
            <label>Tipo Cambio</label>
            <input name="tipcambio" type="text" class="form-control" placeholder="Tipo de Cambio">
           </div>
           <div class="form-group col-md-4">
             <label>Subtotal</label>
             <input name="subtotal" type="text" class="form-control" placeholder="Subtotal" maxlength="13">
           <div class="form-group col-md-4">
            <label>Descuento</label>
            <input name="descuento" type="text" class="form-control" placeholder="Descuento">
           </div>
           <div class="form-group col-md-4">
            <label for="inputAddress">Total</label>
            <input name="total" type="text" class="form-control" id="inputAddress" placeholder="Total">
           </div>
           </div>
           <div class="form-group col-md-4">
            <label for="inputAddress">Metodo de pago</label>
            <input name="metodopago" type="text" class="form-control" id="inputAddress" placeholder="Metodo de pago">
          </div>


         </div>
          

  <div class="form-group">
	{!! Form::submit('Enviar', ['class'=> 'btn btn-primary']) !!}
  </div>
</form>
</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

     <SCRIPT language="javascript">
        $(document).ready(function(){
          $('#tipoimpuesto').hide();
          $('#tableimpuestos').hide();
          $('#trasladoselect').click(function(){
            $('#tableimpuestos').show();
          });
          $('#retenidoselect').click(function(){
            $('#tableimpuestos').show();
          });
          $('#no').click(function(){
            $('#tableimpuestos').hide();
          });
        });
          function addRow(tableID) {
               var table = document.getElementById(tableID);
               var rowCount = table.rows.length;
               var row = table.insertRow(rowCount);
               var cell1 = row.insertCell(0);
               var element1 = document.createElement("input");
               element1.type = "checkbox";
               cell1.appendChild(element1);
               var cell2 = row.insertCell(1);
               var element2 = document.createElement("input");
               element2.type = "text";
               cell2.appendChild(element2);
               var cell3 = row.insertCell(2);
               var element3 = document.createElement("input");
               element3.type = "text";
               cell3.appendChild(element3);
               var cell4 = row.insertCell(3);
               var element4 = document.createElement("input");
               element4.type = "text";
               cell4.appendChild(element4);
               var cell5 = row.insertCell(4);
               var element5 = document.createElement("input");
               element5.type = "text";
               cell5.appendChild(element5);
               var cell6 = row.insertCell(5);
               var element6 = document.createElement("input");
               element6.type = "text";
               cell6.appendChild(element6);
               var cell7 = row.insertCell(6);
               var element7 = document.createElement("input");
               element7.type = "text";
               cell7.appendChild(element7);
               var cell8 = row.insertCell(7);
               var element8 = document.createElement("input");
               element8.type = "text";
               cell8.appendChild(element8);
               var cell9 = row.insertCell(8);
               var element9 = document.createElement("input");
               element9.type = "text";
               cell9.appendChild(element9);
          }
          function deleteRow(tableID) {
               try {
               var table = document.getElementById(tableID);
               var rowCount = table.rows.length;
               for(var i=0; i<rowCount; i++) {
                    var row = table.rows[i];
                    var chkbox = row.cells[0].childNodes[0];
                    if(null != chkbox && true == chkbox.checked) {
                         table.deleteRow(i);
                         rowCount--;
                         i--;
                    }
               }
               }catch(e) {
                    alert(e);
               }

          }
          function impuestoRow(tableID){
            $('#tipoimpuesto').show();            
          }
          function impuestoRT(value){
            $('#tableimpuestos').show();
          }

     </SCRIPT>