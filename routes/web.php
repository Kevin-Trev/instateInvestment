<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\viewsController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\propiedadController;
use App\Http\Controllers\tipoPropiedadController;
use App\Http\Controllers\servicioController;
use App\Http\Controllers\propiedadServicioController;
use App\Http\Controllers\perfilController;
use App\Http\Controllers\correoController;
use App\Http\Controllers\notificacionController;
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

Route::get('/get/typeProperties', [tipoPropiedadController::class, 'index']);
Route::get('/tuspropiedades', [perfilController::class, 'tuspropiedades'])->name('propiedades.index');
Route::get('/get/servicios', [servicioController::class, 'index']);

// Rutas para login y/o gestión del usuario

Route::post('/login', [usuariosController::class, 'login']);
Route::post('/logout', [usuariosController::class, 'logout']);
Route::get('/verificar-correo', [usuariosController::class, 'verificarMail']);
Route::post('/registrar', [usuariosController::class, 'nuevoUsuario']);
Route::post('/useredit/{id}', [usuariosController::class, 'editarUsuario'])->name('user.update');
Route::delete('/userdel', [usuariosController::class, 'eliminarUsuario'])->name('user.delete');
Route::get('get/user/{id}', [usuariosController::class, 'datosUsuario']);

// Rutas necesarias para las propiedades

Route::get('/get/properties',[propiedadController::class, 'index']);
Route::get('/get/results/propeties/{transaccion}/{ciudad}', [propiedadController::class, 'propiedadesResultados']);
Route::get('/get/property/{id}', [propiedadController::class, 'getProperty']);
Route::get('/get/property/admin/{id}', [propiedadController::class, 'getPropertyadmin']);
Route::post('/post/propiedad', [propiedadController::class, 'newProperty']); /* cambiar de GET a POST */

// Ruta para publicar un comentario
Route::post('/post/comentario/', [comentarioController::class, 'comentar']);
Route::get('/delete/comentario/{id}', [comentarioController::class, 'eliminarComentario']);

// Rutas de vistas a las que solo puede acceder un usuario con una sesión iniciada 

Route::group(['middleware' => ['auth']], function () {
    Route::get('/views/hubs/perfil/{id}', [usuariosController::class, 'informacionUsuario'])->name('perfil');
    Route::get('/views/agregar/propiedad', [viewsController::class, 'agregarPropiedad'])->name('agregarPropiedad');
});

Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/perfil-administrador', [usuariosController::class, 'mostrarPerfilAdmin']);
});

// Rutas relacionadas al inicio de la pagina

Route::get('/views/login',[viewsController::class, 'login'])->name('login');
Route::get('/views/registro', [viewsController::class, 'registro'])->name('registro');
Route::get('/views/registro/finalizado', [viewsController::class, 'registro_Finalizar'])->name('registro.finalizar');
Route::get('/views/detalles/propiedad', [viewsController::class, 'detallePropiedad'])->name('detallesPropiedad');
Route::get('/views/catalogo', [viewsController::class, 'catalogoPropiedades'])->name('catalogo');
Route::get('/legal', [viewsController::class, 'avisoPrivacidad'])->name('avisoPrivacidad');
Route::get('/nosotros', [viewsController::class, 'nosotros'])->name('nosotros');
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

Route::get('/publicaciones/no-verificadas', [propiedadController::class, 'showPublicacionesNoVerificadas']);
// Ruta en web.php
Route::post('/propiedad/verificar/{ID_P}', [propiedadController::class, 'verificar'])->name('propiedad.verificar');




Route::get('/obtener-notificaciones', [notificacionController::class, 'obtenerNotificaciones']);

Route::delete('/propiedad/eliminar/{ID_P}', [propiedadController::class, 'eliminar'])->name('propiedad.eliminar');
Route::get('/propiedad/listar', [propiedadController::class, 'listar'])->name('propiedad.listar');


Route::post('/propiedad/verificar/detalles/{ID_P}', [propiedadController::class, 'verificarDetalles'])->name('propiedad.verificarDetalles');
Route::delete('/propiedad/eliminar/detalles/{ID_P}', [propiedadController::class, 'eliminarDetalles'])->name('propiedad.eliminarDetalles');
Route::get('/propiedad/detalles/listar', [propiedadController::class, 'listarDetalles'])->name('propiedad.listarDetalles');


