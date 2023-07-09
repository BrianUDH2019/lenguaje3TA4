<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ResponsableController;

use App\Http\Controllers\Auth\Logincontroller;
use App\Http\Controllers\EstablecimientoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#rutas para los usuarios
Route::get('/usuarios/mostrar', [UsuarioController::class, "index"])
        ->name("umostrar")
        ->middleware("auth");
Route::get('/usuarios/registrar', [UsuarioController::class, "registrar"])
        ->name("uregistrar")
        ->middleware("auth");
 Route::post('/usuarios/guardar', [UsuarioController::class, "guardar"])
        ->name("uguardar")
        ->middleware("auth");

#rutas para los responsables

Route::get('/responsables/mostrar', [ResponsableController::class, "index"])
        ->name("rmostrar")
        ->middleware("auth");
Route::get('/responsables/registrar', [ResponsableController::class, "registrar"])
        ->name("rregistrar")
        ->middleware("auth");
 Route::post('/responsables/guardar', [ResponsableController::class, "guardar"])
        ->name("rguardar")
        ->middleware("auth");

#rutas para los establecimientos

Route::get('/establecimientos/mostrar', [EstablecimientoController::class, "index"])
        ->name("emostrar")
        ->middleware("auth");
Route::get('/establecimientos/registrar', [EstablecimientoController::class, "registrar"])
        ->name("eregistrar")
        ->middleware("auth");
 Route::post('/establecimientos/guardar', [EstablecimientoController::class, "guardar"])
        ->name("eguardar")
        ->middleware("auth");


#Route::get('/asignar-responsable/{id}', 'ResponsableController@asignarResponsable')->name('asignar-responsable');


Route::get('/autenticar',[UsuarioController::class, "login"]);
Route::post('/autenticar',[UsuarioController::class, "autenticar"]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

