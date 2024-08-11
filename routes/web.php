<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\viewsController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\propiedadController;
use App\Http\Controllers\TipoPropiedadController;
use App\Http\Controllers\servicioController;
use App\Http\Controllers\propiedadServicioController;
use App\Http\Controllers\perfilController;
use App\Http\Controllers\correoController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\comentarioController;

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


// Inicio de la pagina

Route::get('/', function () {
    return view('index');
})->name('inicio');

// Correos al usuario
Route::get('/enviar/correo/{email}', [correoController::class, 'enviarCorreo']);

// Ruta para mostrar propiedad en el gugul maps

Route::get('/propiedades/{id}/mapa', [propiedadController::class, 'VerEnMaps'])->name('propiedades.mapa');

// Rutas para obtener datos de la BD 

Route::get('/get/typeProperties', [TipoPropiedadController::class, 'index']);
Route::get('/tuspropiedades', [perfilController::class, 'tuspropiedades'])->name('propiedades.index');
Route::get('/get/servicios', [servicioController::class, 'index']);

// Rutas para login y/o gestión del usuario

Route::post('/login', [usuariosController::class, 'login']);
Route::post('/logout', [usuariosController::class, 'logout']);
Route::delete('/userdel', [usuariosController::class, 'eliminarUsuario']);
Route::get('get/user/{id}', [usuariosController::class, 'datosUsuario']);

// Rutas necesarias para las propiedades

Route::get('/get/properties',[propiedadController::class, 'index']);
Route::get('/get/results/propeties/{transaccion}/{ciudad}', [propiedadController::class, 'propiedadesResultados']);
Route::get('/get/property/{id}', [propiedadController::class, 'getProperty']);
Route::post('/post/propiedad', [propiedadController::class, 'newProperty']); /* cambiar de GET a POST */

// Ruta para publicar un comentario
Route::post('/post/comentario/', [comentarioController::class, 'comentar']);
Route::get('/delete/comentario/{id}', [comentarioController::class, 'eliminarComentario']);

// Rutas de vistas a las que solo puede acceder un usuario con una sesión iniciada 

Route::group(['middleware' => ['auth']], function () {
    Route::get('/views/perfil', [viewsController::class, 'perfil'])->name('perfil');
    Route::get('/views/hubs/perfil', function () { return view('hubs.perfil'); })->name('perfil');
    Route::get('/views/agregar/propiedad', [viewsController::class, 'agregarPropiedad'])->name('agregarPropiedad');
});

// Rutas relacionadas al inicio de la pagina

Route::get('/views/login',[viewsController::class, 'login'])->name('login');
Route::get('/views/registro', [viewsController::class, 'registro'])->name('registro');
Route::get('/views/registro/finalizado', [viewsController::class, 'registro_Finalizar'])->name('registro.finalizar');
Route::get('/views/politicas/avisoPrivacidad', [viewsController::class, 'avisoPrivacidad'])->name('avisoPrivacidad');
Route::get('/views/detalles/propiedad', [viewsController::class, 'detallePropiedad'])->name('detallesPropiedad');
Route::get('/views/catalogo', [viewsController::class, 'catalogoPropiedades'])->name('catalogo');

//Rutas que se utilizan para restablecer la contraseña de un usuario

Route::get('/views/recuperar/contraseña', [viewsController::class, 'recuperarContraseña'])->name('restablecer');
Route::post('/enviar/correo/recuperar', [usuariosController::class, 'correoRestablecer']);
Route::get('/restablecer/contraseña/{token}/{email}', [usuariosController::class, 'formularioActualizar'])->name('formularioActualizar');
Route::post('/actualizar/contraseña', [usuariosController::class, 'actualizarContraseña']);
Route::get('/correo/enviado', [viewsController::class, 'enviado'])->name('correoEnviado');
Route::post('/verificar/token', [usuariosController::class, 'validateToken']);
Route::get('/error', [viewsController::class, 'error'])->name('error');

// *Val nmms* 

// vista perfil del admin en la carpeta admin/perfilAd para que Brandon no este ch...

Route::get('/perfil-administrador', function () {
    return view('admin.catalogo');
});

Route::get('/obtener-notificaciones', [NotificacionController::class, 'obtenerNotificaciones']);

Route::get('/revisar', function () {
    return view('admin.revisar'); 
})->name('revisar');

