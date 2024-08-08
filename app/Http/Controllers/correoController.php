<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class correoController extends Controller
{
    public function eliminarUsuario(Request $request, $user){
        $Motivo = $request->input();
    }
}
