<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ControladorEM extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultEm = DB::table('empleados')->get();
        return view('C_empleado', compact('resultEm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Empleado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorRegistro $request)
    {
        DB::table('empleados')->insert([
            "Nombre" => $request->input('txtNombre'),
            "ApellidoP" => $request->input('txtApellidoP'),
            "ApellidoM" => $request->input('txtApellidoM'),
            "Celular" => $request->input('txtCelular'),
            "Telefono_fijo" => $request->input('txtTelefono'),
            "Correo_Personal" => $request->input('txtCorreo'),
            "Genero" => $request->input('txtGenero'),
            "Fecha_Nacimiento" => $request->input('txtFechaN'),
            "Nivel_Estudios" => $request->input('txtEstudios'),
            "Estado_Civil" => $request->input('txtEstadoC'),
            "Codigo_Postal" => $request->input('txtCodigoP'),
            "Estado" => $request->input('txtEstado'),
            "Municipio" => $request->input('txtMunicipio'),
            "Direccion" => $request->input('txtDireccion'),
            "Nombre_C_Emergencia" => $request->input('txtNombreE'),
            "Telefono_C_Emergencia" => $request->input('txtTelefonoE'),
            "Parentezco" => $request->input('txtParentezco'),
            "Grupo_Sanguineo" => $request->input('txtGrupo'),
            "Tipo_Licencia" => $request->input('txtLicencia'),
            "Banco" => $request->input('txtBanco'),
            "Cuenta" => $request->input('txtCuenta'),
            "Clabe_interbancaria" => $request->input('txtClabe'),
            "NSS" => $request->input('txtNSS'),
            "CURP" => $request->input('txtCURP'),
            "RFC" => $request->input('txtRFC'),
            // "Area"=>$request->input('txtArea'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('emple')->with('confirmado', "Empleado guardado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId = DB::table('empleados')->where('idEmpleado', $id)->first();
        return view('M-EliminarE', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId = DB::table('empleados')->where('idEmpleado', $id)->first();
        return view('M-ActualizarE', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('empleados')->where('idEmpleado', $id)->update([
            "Celular" => $request->input('txtCelular'),
            "Telefono_fijo" => $request->input('txtTelefono'),
            "Estado_Civil" => $request->input('txtEstadoC'),
            "Codigo_Postal" => $request->input('txtCodigoP'),
            "Estado" => $request->input('txtEstado'),
            "Municipio" => $request->input('txtMunicipio'),
            "Direccion" => $request->input('txtDireccion'),
            "Nombre_C_Emergencia" => $request->input('txtNombreE'),
            "Telefono_C_Emergencia" => $request->input('txtTelefonoE'),
            "Parentezco" => $request->input('txtParentezco'),
            "Tipo_Licencia" => $request->input('txtLicencia'),

            "updated_at" => Carbon::now(),

        ]);
        return redirect('emple')->with('Actualizado', "Equipo actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('empleados')->where('idEmpleado', $id)->delete();
        return redirect('emple')->with('Eliminacion', "abc");
    }
}
