<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AGENDA_VISITA;

class AgendaVisita_Controller extends Controller
{
    public function index () {
        $visitas = AGENDA_VISITA::All();
        return response()->json($visitas);
    }

}
