<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Auth\Logincontroller;

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


Route::get('/usuarios/mostrar', [UsuarioController::class, "index"])
        ->name("umostrar")
        ->middleware("auth");
Route::get('/usuarios/registrar', [UsuarioController::class, "registrar"])
        ->name("uregistrar")
        ->middleware("auth");
 Route::post('/usuarios/guardar', [UsuarioController::class, "guardar"])
        ->name("uguardar")
        ->middleware("auth");

Route::get('/ruta1', function () {
    // Lógica de la ruta 1
    return view('/usuarios/mostrar');
})->name('umostrar');



Route::get('/autenticar',[UsuarioController::class, "login"]);
Route::post('/autenticar',[UsuarioController::class, "autenticar"]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

