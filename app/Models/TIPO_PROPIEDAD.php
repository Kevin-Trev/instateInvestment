<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TIPO_PROPIEDAD extends Model
{
    use HasFactory;
    protected $filiable=[ 
        'id_t', 'tipo'
    ];
}
