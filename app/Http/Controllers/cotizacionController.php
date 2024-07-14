<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\COTIZACION;

class Cotizacion_Controller extends Controller
{
    public function index () {
        $cotizaciones = COTIZACION::All();
        return response()->json($cotizaciones);
    }

}
