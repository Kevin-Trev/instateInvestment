<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class correoController extends Controller
{
    public function enviarCorreo($destinatario){
        $detalles = [
            'titulo' => 'Hola kevin',
            'cuerpo' => 'Hola io'
        ];

        Mail::send('correo.avisosGeneral', ['detalles' => $detalles], function($message) use ($destinatario){
            $message->to($destinatario)->subject('holi');
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });

        return response()->json(['status' => "mensaje enviado chido"]);

    }
}
