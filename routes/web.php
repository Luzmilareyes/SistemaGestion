<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EventoController;
Use App\Http\Controllers\EstablecimientoController;
Use App\Http\Controllers\CiudadController;
Use App\Http\Controllers\ServicioController;

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

Route::get('eventos/mostrar',[EventoController::class, "mostrar"]);
Route::get('eventos/crear',[EventoController::class, "crear"]);
Route::get('eventos/actualizar',[EventoController::class, "actualizar"]);
Route::get('eventos/eliminar',[EventoController::class, "mostrar"]);


Route::get('establecimientos',[EstablecimientoController::class, "crear"]);
Route::get('establecimientos/crear',[EstablecimientoController::class, "crear"])->name("establecimientos.create");
Route::get('establecimientos/actualizar',[EstablecimientoController::class, "actualizar"]);
Route::get('establecimientos/eliminar',[EstablecimientoController::class, "eliminar"]);

Route::get('ciudad/mostrar',[CiudadController::class, "mostrar"]);

Route::get('servicio/crear',[ServicioController::class, "crear"]);
Route::get('servicio/mostrar',[ServicioController::class, "mostrar"]);
Route::get('servicio/actualizar',[ServicioController::class, "actualizar"]);
Route::get('servicio/eliminar',[ServicioController::class, "eliminar"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
