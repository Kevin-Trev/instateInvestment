<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PROPIEDAD_SERVICIO extends Model
{
    use HasFactory;

    protected $filiable=[
              'id_ps', 'id_propedad', 'id_servicio'
    ];
}
