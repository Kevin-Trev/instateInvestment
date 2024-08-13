<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cotizacion;

class cotizacionController extends Controller
{
    public function index () {
        $cotizaciones = cotizacion::All();
        return response()->json($cotizaciones);
    }

}
