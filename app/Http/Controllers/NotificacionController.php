<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificacionController extends Controller
{
    public function crear(Request $request)
    {
        $notificacion = Notificacion::create([
            'users_id' => $request->input('users_id'),
            'mensaje' => $request->input('mensaje'),
            'fecha_creacion' => now(),
            'reportes_id' => $request->input('reportes_id'),
            'comentarios_id' => $request->input('comentarios_id'),
        ]);

        return response()->json($notificacion, 201);
    }

    // Método para obtener todas las notificaciones del usuario autenticado
    public function obtenerNotificaciones()
    {
        $userId = Auth::id(); // Obtiene el ID del usuario autenticado

        $notificaciones = Notificacion::where('users_id', $userId)
                                      ->orderBy('fecha_creacion', 'desc')
                                      ->get();

        return response()->json($notificaciones);
    }

    // Método para listar todas las notificaciones (opcional, para administración)
    public function listar()
    {
        $notificaciones = Notificacion::all();
        return view('notificaciones.index', compact('notificaciones'));
    }
}
