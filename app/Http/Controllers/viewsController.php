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
}
