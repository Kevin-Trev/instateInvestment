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
}
