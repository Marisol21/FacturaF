<?php

namespace Factura;

use Illuminate\Database\Eloquent\Model;

class UnidadMed extends Model
{
    protected $table='UnidadM';
    public $primaryKey='idUM';
    protected $fillable = [
            'ClaveU','NomUM','Simbolo'
    ];
}

