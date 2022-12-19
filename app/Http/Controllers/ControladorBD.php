<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorEquipo;
use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistro;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ControladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultEqui = DB::table('equipos')->get();
        return view('C_equipo', compact('resultEqui'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EqTrabajo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorEquipo $request)
    {
        DB::table('equipos')->insert([
            "Proveedor" => $request->input('txtProveedor'),
            "Descripcion" => $request->input('txtDescripcion'),
            "PrecioU" => $request->input('txtPrecioU'),
            "Factura" => $request->input('txtFactura'),
            "Nombre" => $request->input('txtNombreE'),
            "Procesador" => $request->input('txtProcesador'),
            "Nucleos" => $request->input('txtNucleos'),
            "Almacenamiento" => $request->input('txtAlmace'),
            "RAAM" => $request->input('txtRAAM'),
            "Iden_Equipo" => $request->input('txtIdentificador'),
            "ProductoId" => $request->input('txtIdpro'),
            "Status" => $request->input('txtStatus'),
            "Equipo" => $request->input('txtEquipo'),
            "Matricula" => $request->input('txtMatricula'),
            "Marca" => $request->input('txtMarca'),
            "Modelo" => $request->input('txtModelo'),
            "Color" => $request->input('txtColor'),
            "FechaC" => $request->input('txtFechaC'),
            "Estado" => $request->input('txtEstadoC'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('C-e')->with('confirmado', "Equipo guardado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId = DB::table('equipos')->where('idEquipo', $id)->first();
        return view('M-Eliminar', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId = DB::table('equipos')->where('idEquipo', $id)->first();
        return view('M-Actualizar', compact('consultaId'));
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
        DB::table('equipos')->where('idEquipo', $id)->update([
            // "Proveedor"=>$request->input('txtProveedor'),
            "Descripcion" => $request->input('txtDescripcion'),
            // "PrecioU"=>$request->input('txtPrecioU'),
            // "Factura"=>$request->input('txtFactura'),
            "Nombre" => $request->input('txtNombreE'),
            // "Procesador"=>$request->input('txtProcesador'),
            // "Nucleos"=>$request->input('txtNucleos'),
            "Almacenamiento" => $request->input('txtAlmace'),
            "RAAM" => $request->input('txtRAAM'),
            // "Iden_Equipo"=>$request->input('txtIdentificador'),
            // "ProductoId"=>$request->input('txtIdpro'),
            "Status" => $request->input('txtStatus'),
            // "Equipo"=>$request->input('txtEquipo'),
            // "Matricula"=>$request->input('txtMatricula'),
            // "Marca"=>$request->input('txtMarca'),
            // "Modelo"=>$request->input('txtModelo'),
            // "Color"=>$request->input('txtColor'),
            // "FechaC"=>$request->input('txtFechaC'),
            "Estado" => $request->input('txtEstadoC'),
            "updated_at" => Carbon::now(),

        ]);
        return redirect('C-e')->with('Actualizado', "Equipo actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('equipos')->where('idEquipo', $id)->delete();
        return redirect('C-e')->with('Eliminacion', "abc");
    }
}
