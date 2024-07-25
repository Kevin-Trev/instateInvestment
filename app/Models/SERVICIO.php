<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;

    protected $filiable=[
        'id_serv', 'servicios'
    ];
    

    public function propiedad_serv(){
        return $this->hasOne(propiedad_servicio::class, 'servicio_id', 'id_serv'); 
    }

    
}
