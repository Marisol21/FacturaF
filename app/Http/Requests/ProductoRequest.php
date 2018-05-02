<?php

namespace Factura\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'idProdServ'=>'required',
            'NomProd'=>'required',
            'DescripcionProd'=>'required',
            'idUM'=>'required',
            'Precio'=>'required',
            'idEmpresa'=>'required'
        ];
    }
}
