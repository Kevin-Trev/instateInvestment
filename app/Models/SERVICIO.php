<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SERVICIO extends Model
{
    use HasFactory;

    protected $filiable=[
        'id_serv', 'servicios'
    ];
}
