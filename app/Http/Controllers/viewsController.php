<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function registrar(){
        return view('Login-Register.registrarse');
    }
}
