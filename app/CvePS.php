<?php

namespace Factura;

use Illuminate\Database\Eloquent\Model;

class CvePS extends Model
{
    protected $table='ProductoServicio';
    public $primaryKey='idProdServ';
    protected $fillable = [
        'ClaveProdServ','Descripcion', 'PalabrasSimi'
    ];
}
