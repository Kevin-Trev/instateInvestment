<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SERVICIO;

class Servicio_Controller extends Controller
{
    public function index () {
        $servicios = SERVICIO::All();
        return response()->json($servicios);
    }
}
