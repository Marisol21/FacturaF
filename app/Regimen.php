<?php

namespace Factura;

use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    protected $table='RegFiscal';
    public $primaryKey='idRegiFiscal';
    protected $fillable = [
        'ClaveRegFiscal','Descripcion','Fisica','Moral',
    ];    
}
