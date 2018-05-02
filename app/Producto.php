<?php

namespace Factura;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='Producto';
	public $primaryKey='idProd';
    protected $fillable = [
        'idProdServ','NomProd','DescripcionProd','idUM','Precio','idEmpresa'
    ];

    public $timestamps = false;	
}
