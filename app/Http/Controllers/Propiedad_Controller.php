<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PROPIEDAD;

class Propiedad_Controller extends Controller
{
    public function index () {
        $propiedades = PROPIEDAD::All();
        return response()->json($propiedades);
    }

    public function propiedad($id){
        $propiedad = PROPIEDAD::find($id);
        return response()->json($propiedad);
    }
}
