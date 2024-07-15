<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function nuevoEmail(){
        return view('Login-Register.registrarse');
    }

    public function nuevoContraseña(){
        return view('Login-Register.registrarse2');
    }

    public function nuevoDatos(){
        return view('Login-Register.registrarse3');
    }

    public function finalizar(){
        return view('Login-Register.registrarse4');
    }
    
    public function avisoPrivacidad(){
        return view('info.avisoPrivacidad');
    }

    public function terminosCondiciones(){
        return view('info.terminosCondiciones');
    }
}
