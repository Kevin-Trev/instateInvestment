<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tipo_propiedad;

class tipoPropiedadController extends Controller
{
    public function index() {
        $tipos = tipo_propiedad::All();
        return response()->json($tipos);
    }

}
