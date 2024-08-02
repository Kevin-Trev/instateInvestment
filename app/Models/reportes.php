<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reportes extends Model
{
    use HasFactory;
    protected $table = 'reportes';
    protected $primaryKey = 'id_r';
    protected $filiable=[
     'comentarios', 'users_id', 'propiedad_id'
    ];
    

    public function users(){
        return $this->belongsToMany(users::class, 'id', 'users_id');
    }

    public function propiedad(){
        return $this->belongsToMany(propiedad::class, 'id_p', 'propiedad_id');
    }
    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class, 'id_r','reportes_id');
    }
}
