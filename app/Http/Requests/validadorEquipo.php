<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorEquipo extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        "txtProveedor"=>"required",
        "txtDescripcion"=>"required",
        "txtPrecioU"=>"required",
        "txtFactura"=>"required",
        "txtNombreE"=>"required",
        "txtProcesador"=>"required",
        "txtNucleos"=>"required",
        "txtAlmace"=>"required",
        "txtRAAM"=>"required",
        "txtIdentificador"=>"required",
        "txtIdpro"=>"required",
        "txtStatus"=>"required",
        "txtEquipo"=>"required",
        "txtMatricula"=>"required",
        "txtMarca"=>"required",
        "txtModelo"=>"required",
        "txtColor"=>"required",
        "txtFechaC"=>"required",
        "txtEstadoC"=>"required",
        

        ];

    }
    public function messages()
    {
        return[
        "txtProveedor.required"=>"El proveedor es requerido",
        "txtDescripcion.required"=>"La descripcion es requerida",
        "txtPrecioU.required"=>"El precio es requerido",
        "txtFactura.require"=>"La factura es requerida",
        "txtNombreE.required"=>"El nombre es requerido",
        "txtProcesador.required"=>"El procesador es requerido",
        "txtNucleos.required"=>"Los nucleos son requeridos",
        "txtAlmace.required"=>"El almacenamiento es requerido",
        "txtRAAM.required"=>"La RAAM es requerida",
        "txtIdentificador.required"=>"El identificador es requerido",
        "txtIdpro.required"=>"El id del producto es requerido",
        "txtStatus.required"=>"El status es requerido",
        "txtEquipo.required"=>"El Eequipo es requerido",
        "txtMatricula.required" =>"La matricula es requerida",
        "txtMarca.required"=>"La marca es requerida.",
        "txtModelo.required"=>"El modelo es requerido.",
        "txtColor.required"=>"El color es requerido",
        "txtFechaC.required"=>"La fecha de compraes requerida",
        "txtFechaC.date"=>"Este campo solo acepta formatos de fecha",
        "txtEstadoC.required"=>"El estado es requerido",
        
        
        ];
    }
}
