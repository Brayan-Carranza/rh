<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistro extends FormRequest
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
        "txtApellidoP"=>"required",
        "txtApellidoM" =>"required",
        "txtCelular"=>"required|numeric|max_digits:10",
        "txtTelefono"=>"required|numeric|max_digits:10",
        "txtCorreo"=>"required|email",
        "txtGenero"=>"required",
        "txtFechaN"=>"required",
        "txtEstudios"=>"required",
        "txtEstadoC"=>"required",
        "txtCodigoP"=>"required|numeric",
        "txtEstado"=>"required",
        "txtMunicipio"=>"required",
        "txtDireccion"=>"required",
        "txtNombreE"=>"required",
        "txtTelefonoE"=>"required|numeric",
        "txtParentezco"=>"required",
        "txtGrupo"=>"required",  
        "txtLicencia"=>"required",
        "txtBanco"=>"required",
        "txtCuenta"=>"required|numeric|min_digits:11",
        "txtClabe"=>"required|numeric|min_digits:18",  
        "txtNSS"=>"required|numeric",
        "txtCURP"=>"required|max:30",
        "txtRFC"=>"required|max:30",
        

        ];

    }
    public function messages()
    {
        return[
        "txtNombre.required"=>"El Nombre es requerido",
        "txtApellidoP.required"=>"El Apellido es requerido",
        "txtApellidoM.required" =>"El Apellido es requerido",
        "txtCelular.required"=>"El número celular es requerido",
        "txtTelefono.required"=>"Este campo es requerido",
        "txtGenero.required"=>"Este campo es requerido",
        "txtFechaN.required"=>"Este campo es requerido",
        "txtEstudios.required"=>"Este campo es requerido",
        "txtEstadoC.required"=>"Este campo es requerido",
        "txtCodigoP.required"=>"Este campo es requerido",
        "txtEstado.required"=>"Este campo es requerido",
        "txtMunicipio.required"=>"Este campo es requerido",
        "txtDireccion.required"=>"Este campo es requerido",
        "txtNombreE.required"=>"Este campo es requerido",
        "txtTelefonoE.required"=>"Este campo es requerido",
        "txtParentezco.required"=>"Este campo es requerido",
        "txtGrupo.required"=>"Este campo es requerido",
        "txtLicencia.required"=>"Este campo es requerido",
        "txtBanco.required"=>"El banco es requerido",
        "txtCuenta.required"=>"El número de cuenta es requerido",
        "txtClabe.required"=>"La clabe interbancaria es requerida",
        "txtCuenta.numeric"=>"Este campo solo acepta números",
        "txtClabe.numeric"=>"Este campo solo acepta números",
        "txtCuenta.mins_digits"=>"Mínimo 10 digitos",
        "txtClabe.mins_digits"=>"Mínimo 18 digitos",
        "txtCelular.numeric"=>"El campo solo acepta números.",
        "txtTelefono.numeric"=>"El campo solo acepta números.",
        "txtTelefonoE.numeric"=>"El campo solo acepta números.",
        "txtCodigoP.numeric"=>"El campo solo acepta números.",
        "txtCelular.max_digits"=>"El campo solo acepta máximo diez números.",
        "txtTelefono.max_digits"=>"El campo solo acepta máximo diez números.",
        "txtCorreo.required"=>"El Correo es requerido",
        "txtCorreo.email"=>"El campo solo acepta formato e-mail",
        "txtNSS.required"=>"El NSS es requerido",
        "txtNSS.numeric"=>"El campo solo acepta números.",
        "txtCURP.required"=>"El CURP es requerido",
        "txtRFC.required"=>"El RFC es requerido.",
        ];
    }
}
