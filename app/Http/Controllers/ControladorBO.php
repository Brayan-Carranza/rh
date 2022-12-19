<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorBanco;
use App\Http\Requests\validadorRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ControladorBO extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultBa = DB::table('empleados')->get();
        return view('C_banco', compact('resultBa'));
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
    public function store(ValidadorBanco $request)
    {
        DB::table('empleados')->insert([
            "Nombre " => $request->input('txtNombre'),
            "Banco " => $request->input('txtBanco'),
            "Cuenta " => $request->input('txtCuenta'),
            "Clabe_interbancaria " => $request->input('txtClabe'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('ban')->with('confirmado', "Empleado guardado");
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
        return view('M-EliminarB', compact('consultaId'));
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
        return view('M-ActualizarB', compact('consultaId'));
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
            "Nombre " => $request->input('txtNombre'),
            "Banco " => $request->input('txtBanco'),
            "Cuenta " => $request->input('txtCuenta'),
            "Clabe_interbancaria " => $request->input('txtClabe'),
            // "Area"=>$request->input('txtArea'),
            "updated_at" => Carbon::now(),

        ]);
        return redirect('ban')->with('Actualizado', "Equipo actualizado");
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
        return redirect('ban')->with('Eliminacion', "abc");
    }
}
