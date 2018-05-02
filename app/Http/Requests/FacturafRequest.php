<?php

namespace Factura\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturafRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Serie'=>'required',
            'Folio'=>'required',
            'TipoComprobante'=>'required',
            'Fecha'=>'required',
            'LugarExpedicion'=>'required',
            'idCliente'=>'required',
            'idEmpresa'=>'required',
            'idProd'=>'required'
        ];
    }
}
