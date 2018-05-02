<?php

namespace Factura;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table='Cliente';
	protected $primaryKey='idCliente';
    protected $fillable = [
        'RFCliente','NomCte','CorreoCte','CP','idPais','NumRegIdTrib','idEmpresa'
    ];

	public $timestamps = false;							
    

						

}
