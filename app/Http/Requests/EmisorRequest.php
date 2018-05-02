<?php

namespace Factura\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmisorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules(){
      return[
       'RFCempresa' => 'required',
       'NomEmpresa' => 'required',
       'idRegiFiscal' => 'required',
       'CP' => 'required',
       'idPais' => 'required'
      ];
    }
}
