<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveOrderRequest extends FormRequest
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
            'number_orden'  => 'required|unique:orders',
            'fecha'      => 'required',
            'monto'        => 'required|Max:5',
            'estado'        => 'required',
            'id_detalle' => 'required',
            'id_usuario' => 'required'
        ];
    }
}
