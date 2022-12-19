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
        Schema::create('archivos', function (Blueprint $table) {
            $table->increments('idArchivo');
            $table->string('Apellidos');
            $table->string('Nombres');
            $table->string('ActaNacimiento');
            $table->string('CURP');
            $table->string('CV');
            $table->string('RFC');
            $table->string('CartaAntecedentes');
            $table->string('ComprobanteDomicilio');
            $table->string('NSS');
            $table->string('Licencia'); 
            $table->string('ExamenMedico');
            $table->string('AltaIMMS');
            $table->string('BajaIMMS');
            $table->string('ConstanciaIMMS');
            $table->string('Psicometricos');
            $table->timestamps(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivos');
    }
};
