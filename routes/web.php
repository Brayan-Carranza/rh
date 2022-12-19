<?php

use App\Http\Controllers\ControladorArchivos;
use App\Http\Controllers\ControladorBD;
use App\Http\Controllers\ControladorBO;
use App\Http\Controllers\ControladorEM;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controller(ControladorVistas::class)->group(function () {


    Route::get('Archivos', 'vistaArchivos')->name('Ar');
    Route::get('/', 'VistaEmpleado')->name('Em');
});

Route::post('guardarUsuario', [ControladorVistas::class, 'ProcesarRegistro'])->name('us');


Route::post('ar', [ControladorArchivos::class, 'Insertar'])->name('ar.Insertar');
//ControladorBD
Route::get('C-e/create',  [ControladorBD::class, 'create'])->name('C_equipo.create');
Route::post('C-e', [ControladorBD::class, 'store'])->name('C-e.store');
Route::get('C-e',  [ControladorBD::class, 'index'])->name('C-e.index');
Route::put('C-e/{id}', [ControladorBD::class, 'update'])->name('C-e.update');
Route::get('C-e/show/{id}',  [ControladorBD::class, 'show'])->name('EqTrabajo.show');
Route::delete('C-e/{id}',  [ControladorBD::class, 'destroy'])->name('EqTrabajo.destroy');
Route::get('C-e/{id}/edit',  [ControladorBD::class, 'edit'])->name('EqTrabajo.edit');


//ControladorEM
Route::get('emple/create',  [ControladorEM::class, 'create'])->name('C_empleado.create');
Route::post('emple', [ControladorEM::class, 'store'])->name('emple.store');
Route::get('emple',  [ControladorEM::class, 'index'])->name('emple.index');
Route::put('emple/{id}', [ControladorEM::class, 'update'])->name('emple.update');
Route::get('emple/show/{id}',  [ControladorEM::class, 'show'])->name('Empleado.show');
Route::delete('emple/{id}',  [ControladorEM::class, 'destroy'])->name('Empleado.destroy');
Route::get('emple/{id}/edit',  [ControladorEM::class, 'edit'])->name('Empleado.edit');

//ControladorBO
// Route::get('ban/create',  [ControladorBO::class, 'create'])->name('C_empleado.create');
Route::post('ban', [ControladorBO::class, 'store'])->name('ban.store');
Route::get('ban',  [ControladorBO::class, 'index'])->name('ban.index');
Route::put('ban/{id}', [ControladorBO::class, 'update'])->name('ban.update');
// Route::get('ban/show/{id}',  [ControladorBO::class, 'show'])->name('Empleado.show');
// Route::delete('emple/{id}',  [ControladorBO::class, 'destroy'])->name('Empleado.destroy');
// Route::get('emple/{id}/edit',  [ControladorBO::class, 'edit'])->name('Empleado.edit');
