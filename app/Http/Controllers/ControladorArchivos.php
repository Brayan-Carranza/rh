<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Archivo;
use Exception;

class ControladorArchivos extends Controller
{
    public function Insertar(Request $request)
    {
        //     dd($request);
        try {

            DB::beginTransaction();
            $arc=new Archivo;
            $arc->Apellidos = $request->get('txtApellidos');
            $arc->Nombres = $request->get('txtNombres');

            if ($request->hasFile('Acta')) {
                $archivo = $request->file('Acta');
                $archivo->move(public_path() . '/ActaNacimiento/', $archivo->getClientOriginalName());
                $arc->ActaNacimiento = $archivo->getClientOriginalName();
            }
            if($request->hasFile('CURP')); {
                $archivo = $request->file('CURP');
                $archivo->move(public_path() . '/CURP/', $archivo->getClientOriginalName());
                $arc->CURP = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('Cv')); {
                $archivo = $request->file('Cv');
                $archivo->move(public_path() . '/CV ', $archivo->getClientOriginalName());
                $arc->CV = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('RFC')); {
                $archivo = $request->file('RFC');
                $archivo->move(public_path() . '/RFC', $archivo->getClientOriginalName());
                $arc->RFC = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('Carta')); {
                $archivo = $request->file('Carta');
                $archivo->move(public_path() . '/CartaAntecedentes/', $archivo->getClientOriginalName());
                $arc->CartaAntecedentes = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('domicilio')); {
                $archivo = $request->file('domicilio');
                $archivo->move(public_path() . '/ComprobanteDomicilio/', $archivo->getClientOriginalName());
                $arc->ComprobanteDomicilio = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('NSS')); {
                $archivo = $request->file('NSS');
                $archivo->move(public_path() . '/NSS/', $archivo->getClientOriginalName());
                $arc->NSS = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('Licencia')); {
                $archivo = $request->file('Licencia');
                $archivo->move(public_path() . '/Licencia/', $archivo->getClientOriginalName());
                $arc->Licencia = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('Examen')); {
                $archivo = $request->file('Examen');
                $archivo->move(public_path() . '/ExamenMedico', $archivo->getClientOriginalName());
                $arc->ExamenMedico = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('Alta')); {
                $archivo = $request->file('Alta');
                $archivo->move(public_path() . '/AltaIMMS', $archivo->getClientOriginalName());
                $arc->AltaIMMS = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('Baja')); {
                $archivo = $request->file('Baja');
                $archivo->move(public_path() . '/BajaIMMS', $archivo->getClientOriginalName());
                $arc->BajaIMMS = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('Constancia')); {
                $archivo = $request->file('Constancia');
                $archivo->move(public_path() . '/ConstanciaIMMS', $archivo->getClientOriginalName());
                $arc->ConstanciaIMMS = $archivo->getClientOriginalName();
            }
            if ($request->hasFile('Psico')); {
                $archivo = $request->file('Psico');
                $archivo->move(public_path() . '/Psicometricos', $archivo->getClientOriginalName());
                $arc->Psicometricos = $archivo->getClientOriginalName();
            }

            $arc->save();
            return redirect()->route('Em')->with('confirmacion',$arc);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
