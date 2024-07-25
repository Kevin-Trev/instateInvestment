<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_propiedad extends Model
{
    use HasFactory;
    protected $filiable=[ 
        'id_t', 'tipo'
    ];
    public function propiedad(){
        return $this->hasOne(suscripcion_vip::class, 'Tipo_Propiedad_id', 'id_t');
    }
}
