<?php

namespace Factura;

use Illuminate\Database\Eloquent\Model;

class TipoComp extends Model
{
    protected $table='TipoComprovante';
    public $primaryKey='idTipComprovante';
    protected $fillable = [
         'ClaveTipComprovante','Descripcion'
    ];

}
