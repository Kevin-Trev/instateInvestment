<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class USUARIO extends Model
{
    use HasFactory;
    protected $filiable=[
       'id_u', 'nombre', 'apellido', 'correo', 'telefono', 'tipo', 'calificacion' 
    ];
}
