<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\COMENTARIO;

class Comentario_Controller extends Controller
{
    public function index () {
        $comentarios = COMENTARIO::All();
        return response()->json($comentarios);
    }

}
