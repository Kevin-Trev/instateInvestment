<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SERVICIO;

class servicioController extends Controller
{
    public function index () {
        $servicios = SERVICIO::All();
        return response()->json($servicios);
    }
}
