<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\propiedades;

class perfilController extends Controller
{
    public function tuspropiedades()
    {
        $userId = Auth::id();
        $propiedades = Propiedad::where('users_Id', $userId)->get();
        return view('hubs.EJEMPLO', compact('propiedades'));
    }
}
