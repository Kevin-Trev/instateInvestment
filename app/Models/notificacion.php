<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notificacion extends Model
{
    use HasFactory;
    protected $table = 'notificacion';
    protected $primaryKey = 'id_noti';
    protected $filiable=[
      'users_id', 'mensaje', 'fecha', 'reportes_id'
    ];
    public function user()
    {
        return $this->belongsToMany(users::class, 'id', 'users_id');
    }


    public function reporte()
    {
        return $this->belongsToMany(Notificacion::class, 'id_r','reportes_id');
    }
}

    