<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\propiedades;
use App\Models\tipo_propiedades;

class PropiedadController extends Controller
{
    public function index () {
        $propiedades = propiedades::where('verificacion','=','1')
                                    ->get();
        return response()->json($propiedades);
    }

    public function propiedad($id){
        $propiedad = propiedades::find($id);
        return response()->json($propiedad);
    }
}
