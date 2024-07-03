<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('Login-Register.iniciar-sesión');
});

Route::get('/registrarse', function(){
    return view('Login-Register.registrarse4');
});

Route::get('/privacidad', function(){
    return view('info.politicaDePrivacidad');
});

Route::get('/legal', function(){
    return view('info.avisoLegal');
});