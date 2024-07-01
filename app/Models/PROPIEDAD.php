<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PROPIEDAD extends Model
{
    use HasFactory;

    protected $filiable=[
        'id_p', 'precio', 'recamaras', 'disponibilidad', 'direccion',
        'area', 'frente', 'fondo', 'rentable', 'vendible',
        'id_usario', 'id_tipo_propiedad', 'id_verificacion'
    ];
}
