<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VERIFICACION extends Model
{
    use HasFactory;

    protected $filiable=[
        'id_ver', 'estado'
    ];
}
