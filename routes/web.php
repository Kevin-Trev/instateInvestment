<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewsController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\propiedadController;
use App\Http\Controllers\TipoPropiedadController;
use App\Http\Controllers\servicioController;
use App\Http\Controllers\propiedadServicioController;

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

Route::post('/login', [usuariosController::class, 'login']);
Route::post('/logout', [usuariosController::class, 'logout']);
Route::post('/registrar', [usuariosController::class, 'nuevoUsuario']);
Route::post('/useredit', [usuariosController::class, 'editarUsuario']);
Route::delete('/userdel', [usuariosController::class, 'eliminarUsuario']);

Route::get('/get/properties',[propiedadController::class, 'index']);
Route::get('/get/property/{id}', [propiedadController::class, 'getProperty']);
Route::post('/post/propiedad', [propiedadController::class, 'newProperty']); /* cambiar de GET a POST */

Route::get('/get/typeProperties', [TipoPropiedadController::class, 'index']);

Route::get('/get/servicios', [servicioController::class, 'index']);

Route::post('/add/propiedadServicio', [propiedadServicioController::class, 'store']);

Route::get('/hubs/perfil', function () { return view('hubs.perfil'); });
Route::get('/hubs/perfi/seguridad', function () { return view('hubs.seguridad'); });

Route::get('/filtros',[viewsController::class, 'filtros'])->name('filtro');
Route::get('/view/login',[viewsController::class, 'login'])->name('login');
Route::get('/registro', [viewsController::class, 'nuevoEmail'])->name('nuevoEmail');
Route::get('/registro/finalizado', [viewsController::class, 'finalizar'])->name('finalizar');
Route::get('/terminos', [viewsController::class, 'terminosCondiciones'])->name('terminosCondiciones');
Route::get('/avisoPrivacidad', [viewsController::class, 'avisoPrivacidad'])->name('avisoPrivacidad');
Route::get('/inicio', [viewsController::class, 'inicio'])->name('inicio');
Route::get('/agregar/propiedad', [viewsController::class, 'agregarPropiedad'])->name('agregarPropiedad');
Route::get('/detalles/propiedad', [viewsController::class, 'detallePropiedad'])->name('detallesPropiedad');




Route::get('/nuevoRegistro', [viewsController::class, 'contraseña']);


// Ruta para mostrar el perfil del usuario
Route::get('/usuarios/{usuario}', [UsuariosController::class, 'mostrarPerfil'])->name('admin.perfilAd');

// Ruta para suspender un usuario (debe ser POST si el formulario usa POST)
Route::post('/usuarios/{usuario}/suspender', [UsuariosController::class, 'suspender'])->name('usuarios.suspender');
