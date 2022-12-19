<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorEquipo;
use App\Http\Requests\validadorRegistro;
use App\Models\Banco;
use App\Models\Empleado;
use App\Models\Equipo;
use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function vistaWelcome()
    {
        return view('welcome');
    }

    public function vistaEmpleado()
    {
        return view('Empleado');
    }
    public function vistaArchivos()
    {
        return view('Archivos');
    }
    public function VistaUsuario()
    {
        return view('usuarios');
    }
    public function VistaEquipo()
    {
        return view('EqTrabajo');
    }
}
