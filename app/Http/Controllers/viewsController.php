<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function registro(){
        return view('Login-Register.registrarse');
    }

    public function registro_Finalizar(){
        return view('Login-Register.registrarseExito');
    }
    
    public function avisoPrivacidad(){
        return view('info.avisoPrivacidad');
    }

    public function terminosCondiciones(){
        return view('info.terminosCondiciones');
    }

    public function login(){
        return view('Login-Register.Iniciar-sesión');
    }

    public function agregarPropiedad(){
        return view('agregarPropiedad');
    }

    public function catalogoPropiedades() {
        return view('paginaFiltro');
    }

    public function detallePropiedad(){
        return view('detallesPropiedad');
    }

    public function recuperarContraseña(){
        return view ('Login-Register.recuperarContraseña');
    }

    public function perfil(){
        return view('hubs.perfil');
    }
}
