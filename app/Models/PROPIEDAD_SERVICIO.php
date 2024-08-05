<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PROPIEDAD_SERVICIO extends Model
{
    use HasFactory;
    protected $table = 'propiedad_servicio';
    protected $primaryKey = 'id_ps';
    protected $filiable=[
              'propiedad_id', 'servicio_id'
    ];

    public function servicio(){
        return $this->belongsToMany(servicio::class,'id_p', 'propiedad_id');
    }
    public function propiedad(){
        return $this->belongsToMany(propiedad::class, 'id_serv', 'servicio_id');
    }
}
