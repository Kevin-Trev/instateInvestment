<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propiedad_servicio extends Model
{
    use HasFactory;
    protected $table = 'propiedad_servicio';
    protected $primaryKey = 'id_ps';
    protected $fillable=[
              'Propiedad_id', 'Servicio_id'
    ];
    public $timestamps = false;

    public function servicio(){
        return $this->belongsToMany(servicio::class,'id_p', 'propiedad_id');
    }
    public function propiedad(){
        return $this->belongsToMany(propiedades::class, 'id_serv', 'servicio_id');
    }
}
