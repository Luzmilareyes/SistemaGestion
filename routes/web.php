<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EstablecimientoController;
Use App\Http\Controllers\CiudadController;
Use App\Http\Controllers\ServicioController;
Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\EventoController;

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
    return redirect(route("home"));
});

Route::get('eventos/mostrar',[EventoController::class, "mostrar"]);
Route::get('eventos/crear',[EventoController::class, "crear"]);
Route::get('eventos/actualizar',[EventoController::class, "actualizar"]);
Route::get('eventos/eliminar',[EventoController::class, "mostrar"]);


Route::get('establecimientos',[EstablecimientoController::class, "crear"]);
Route::get('establecimientos/crear',[EstablecimientoController::class, "create"])->name("establecimientos.create");
Route::post('establecimientos/crear',[EstablecimientoController::class, "createPost"])->name("establecimientos.create");
Route::get('establecimientos/index',[EstablecimientoController::class, "index"] )->name("establecimientos.index");

Route::get('eventos/crear',[EventoController::class, "create"])->name("eventos.create");
Route::post('eventos/crear',[EventoController::class, "createPost"])->name("eventos.create");
Route::get('eventos/index',[EventoController::class, "index"] )->name("eventos.index");


Route::get('establecimientos/actualizar',[EstablecimientoController::class, "actualizar"]);
Route::get('establecimientos/eliminar',[EstablecimientoController::class, "eliminar"]);

Route::get('ciudad/mostrar',[CiudadController::class, "mostrar"]);

Route::get('servicio/crear',[ServicioController::class, "crear"]);
Route::get('servicio/mostrar',[ServicioController::class, "mostrar"]);
Route::get('servicio/actualizar',[ServicioController::class, "actualizar"]);
Route::get('servicio/eliminar',[ServicioController::class, "eliminar"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login2', [AuthController::class, 'login2'])->name('login2');



