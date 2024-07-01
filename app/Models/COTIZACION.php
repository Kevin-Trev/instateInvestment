<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class COTIZACION extends Model
{
    use HasFactory;

    protected $filiable=[
        'id_c', 'monto', 'periodo', 'fecha_inicio', 'metodo_pago',
        'id_usuario', 'id_propiedad'
    ];
}
