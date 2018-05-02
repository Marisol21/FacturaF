<?php

namespace Factura;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table='Pais';
    public $primaryKey='idPais';
    protected $fillable = [
         'ClavePais','Descripcion'
    ];    
}
