<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TIPO_PROPIEDAD;

class TipoPropiedad_Controller extends Controller
{
    public function index () {
        $tipos = TIPO_PROPIEDAD::All();
        return response()->json($tipos);
    }

}
