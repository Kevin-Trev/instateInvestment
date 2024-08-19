<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\propiedades;
use App\Models\reportes;
use App\Models\imagenes_propiedad;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Exception;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function informacionUsuario($id) {
        $propiesporciudad = propiedades::where('users_Id', '=', $id)
        ->where('ciudad');
    }
}
