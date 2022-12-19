<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorBanco extends FormRequest
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
            "txtNombre"=>"required",
            "txtBanco"=>"required",
            "txtCuenta"=>"required|numeric|mins_digits:10",
            "txtClabe"=>"required|numeric|mins_digits:18",
        ];
    }
    public function messages()
    {
        return[
        "txtNombre.required"=>"El nombre es requerido",
        "txtBanco.required"=>"El banco es requerido",
        "txtCuenta.required"=>"El numero de cuenta es requerido",
        "txtClabe.required"=>"La clabe interbancaria es requerida",
        "txtCuenta.numeric"=>"Este campo solo acepta numeros",
        "txtClabe.numeric"=>"Este campo solo acepta numeros",
        "txtCuenta.mins_digits"=>"Minimo 10 digitos",
        "txtClabe.mins_digits"=>"Minimo 18 digitos",

        ];
        

    }
}
