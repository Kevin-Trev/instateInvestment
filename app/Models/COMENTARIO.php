<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    use HasFactory;
    protected $table = 'comentario';
     public $timestamps=false;
    protected $primaryKey = 'id_com';
    protected $filiable=[
         'comentario', 'fecha', 'users_id', 'propiedad_id'
    ];

    public function users(){
        return $this->belongsToMany(users::class, 'id', 'users_id');
    }
    public function propiedad(){
        return $this->belongsToMany(propiedad::class, 'id_p', 'propiedad_id');
    }

    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class, 'id_noti','comentarios_id');
    }
}

