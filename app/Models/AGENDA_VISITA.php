<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AGENDA_VISITA extends Model
{
    use HasFactory;

    protected $filiable=[
        'id_v', 'fecha', 'hora', 'estado', 
        'id_usuario', 'id_propiedad'
    ];
}
