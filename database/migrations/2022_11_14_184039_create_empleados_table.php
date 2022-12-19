<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('idEmpleado');   
            $table->string('Nombre');
            $table->string('ApellidoP');
            $table->string('ApellidoM');
            $table->string('Celular');
            $table->string('Telefono_fijo');
            $table->string('Correo_Personal');
            $table->string('Genero');
            $table->string('Fecha_Nacimiento');
            $table->string('Nivel_Estudios');
            $table->string('Estado_Civil');
            $table->string('Codigo_Postal');
            $table->string('Estado');
            $table->string('Municipio');
            $table->string('Direccion');
            $table->string('Nombre_C_Emergencia');
            $table->string('Telefono_C_Emergencia');    
            $table->string('Parentezco');
            $table->string('Grupo_Sanguineo');
            $table->string('Tipo_Licencia');
            // $table->date('Fecha_vencimiento');
            $table->string('Banco');
            $table->string('Cuenta');
            $table->string('Clabe_interbancaria');
            $table->string('NSS');
            $table->string('CURP');
            $table->string('RFC');
            // $table->string('Area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
