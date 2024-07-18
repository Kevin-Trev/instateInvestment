<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function nuevoUsuario(Request $request){
        $usuario = user::create([
            'email' => $request->input('email')
        ]);
    }

    public function login () {
        $credenciales = request()->only('email','password');

        if(Auth::attempt($credenciales)){
            request()->session()->regenerate();
            return redirect('/');
        }
        else{
            return redirect('/')->with('error_login','E-mail o contraseña Incorrecta');
        }
    }

    public function logout () {

        Auth::logout();
        return redirect('/');
    }

}
