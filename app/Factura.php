<?php

namespace Factura;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table='Factura';
	public $primaryKey='idFactura';
    protected $fillable = [
        'Serie','Folio','TipoComprobante','Fecha','LugarExpedicion','idCliente','idEmpresa','idProd'
    ];

    public $timestamps = false;	    
}
