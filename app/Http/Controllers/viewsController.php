<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function nuevoEmail(){
        return view('Login-Register.registrarse');
    }

    public function finalizar(){
        return view('Login-Register.registrarseExito');
    }
    
    public function avisoPrivacidad(){
        return view('info.avisoPrivacidad');
    }

    public function terminosCondiciones(){
        return view('info.terminosCondiciones');
    }

    public function inicio(){
        return view('paginaFiltro');
    }

    public function login(){
        return view('Login-Register.Iniciar-sesión');
    }

    public function filtros() {
        return view ('paginaFiltro');
    }

    public function agregarPropiedad(){
        return view('agregarPropiedad');
    }

    public function detallePropiedad(){
        return view('detallesPropiedad');
    }
}
