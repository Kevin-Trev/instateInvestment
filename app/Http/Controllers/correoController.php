<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class correoController extends Controller
{

    public function enviarCorreo($email){
        Mail::send('correo')->to($email)->from(ENV('EMAIL_FROM_ADDRESS'), );
    }
}
