<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propiedad_servicio extends Model
{
    use HasFactory;

    protected $filiable=[
              'id_ps', 'propiedad_id', 'servicio_id'
    ];

    public function servicio(){
        return $this->belongsToMany(servicio::class,'id_p', 'propiedad_id');
    }
    public function propiedad(){
        return $this->belongsToMany(propiedad::class, 'id_serv', 'servicio_id');
    }
}
