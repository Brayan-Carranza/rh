<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    //use HasFactory;
    protected $table='archivos';
    // protected $primaryKey='idArchivo';

    public $timestamps=false;
    protected $fillable=[
'Apellidos',
'Nombres',
'ActaNacimiento',
'CURP',
'CV',
'RFC',
'CartaAntecedentes',
'ComprobanteDomicilio',
'NSS',
'Licencia',
'ExamenMedico',
'AltaIMMS',
'BajaIMMS',
'ConstanciaIMMS',
'Psicometricos',

    ];
}
