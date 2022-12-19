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
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('idEquipo');
            $table->string('Proveedor');
            $table->string('Descripcion');
            $table->string('PrecioU');
            $table->string('Factura');
            $table->string('Nombre');
            $table->string('Procesador');
            $table->string('Nucleos');
            $table->string('Almacenamiento');
            $table->string('RAAM');
            $table->string('Iden_Equipo');
            $table->string('ProductoId');
            $table->string('Status');
            $table->string('Equipo');
            $table->string('Matricula');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('Color');
            $table->string('FechaC');
            $table->string('Estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
};
