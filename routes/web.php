<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewsController;

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
    return view('index');
});

Route::get('/registro', [viewsController::class, 'nuevoEmail'])->name('nuevoEmail');
Route::get('/registro/contraseña', [viewsController::class, 'nuevoContraseña'])->name('nuevoContraseña');
Route::get('/registro/datos', [viewsController::class, 'nuevoDatos'])->name('nuevoDatos');
Route::get('/registro/finalizado', [viewsController::class, 'finalizar'])->name('finalizar');
Route::get('/terminos', [viewsController::class, 'terminosCondiciones'])->name('terminosCondiciones');
Route::get('/avisoPrivacidad', [viewsController::class, 'avisoPrivacidad'])->name('avisoPrivacidad');
Route::get('/inicio', [viewsController::class, 'inicio'])->name('inicio');

Route::get('/nuevoRegistro', [viewsController::class, 'contraseña']);