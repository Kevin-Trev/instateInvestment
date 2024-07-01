<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SUSCRIPCION_VIP extends Model
{
    use HasFactory;

    protected $filiable=[
           'id_s', 'costo', 'fecha_inicio', 'fecha_fin', 'id_usuario'
    ];
}
