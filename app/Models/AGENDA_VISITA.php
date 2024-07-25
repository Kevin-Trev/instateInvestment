<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda_visita extends Model
{
    use HasFactory;

    protected $filiable=[
        'id_av', 'fecha', 'hora', 'estado', 
        'users_id', 'propiedad_id'
    ];
    public function users(){
        return $this->belongsToMany(users::class, 'id', 'users_id');
    }
    public function propiedad(){
        return $this->belongsToMany(propiedad::class, 'id_p', 'propiedad_id');
    }
}
