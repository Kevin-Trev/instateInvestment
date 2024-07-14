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

Route::get('/registrarse', [viewsController::class, 'registrar'])->name('registrarse');


Route::get('/privacidad', function(){
    return view('info.politicaDePrivacidad');
});

Route::get('/legal', function(){
    return view('info.avisoLegal');
});

Route::get('/perfil', function () {
    return view('perfil');
});