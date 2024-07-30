<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suscripcion_vip extends Model
{
    use HasFactory;

 protected $table = 'suscripcion_vip';
    protected $primaryKey = 'id_s';
    protected $filiable=[
            'costo', 'fecha_inicio', 'fecha_fin', 'users_Id' 
    ];

    public function users(){
        return $this->belongsToMany(users::class, 'id', 'users_Id');
    }
}
