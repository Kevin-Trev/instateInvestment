<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\servicio;

class ServicioController extends Controller
{
    public function index () {
        $servicios = servicio::All();
        return response()->json($servicios);
    }
}
