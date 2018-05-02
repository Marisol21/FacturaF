<?php

namespace Factura;

use Illuminate\Database\Eloquent\Model;

class Emisor extends Model
{
    protected $table='Empresa';
    public $primaryKey='idEmpresa';
    protected $fillable = [
        'RFCempresa','NomEmpresa','idRegiFiscal','CP','idPais',
    ];
		
	public $timestamps = false;							


}
