<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class COMENTARIO extends Model
{
    use HasFactory;

    protected $filiable=[
        'id_com', 'comentario', 'fecha', 'id_usuario', 'id_propiedad'
    ];
}
