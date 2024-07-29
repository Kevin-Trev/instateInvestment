<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propiedades extends Model
{
    use HasFactory;

    protected $table = 'propiedades';
    protected $primaryKey = 'ID_P';
    public $timestamps = false;

    protected $fillable=[
        'titulo', 'precio', 'recamaras','baños', 'disponibilidad', 'direccion','codigo_postal', 'num_exterior','num_interior', 'colonia',
        'calle','ciudad','estado','area', 'frente', 'fondo', 'rentable', 'vendible',
        'users_id', 'Tipo_Propiedad_id', 'verificacion'
    ];
    public function tipo_propiedad(){
        return $this->belongsTo(tipo_propiedad::class,'Tipo_Propiedad_id');
    }
    public function users(){
        return $this->belongsToMany(users::class, 'id', 'users_id');
    }
    public function propiedad_serv(){
        return $this->hasOne(propiedad_servicio::class, 'propiedad_id', 'id_p'); 
    }

    public function cotizacion(){
        return $this->hasOne(cotizacion::class, 'propiedad_id', 'id_p'); 
    }
    public function comentario(){
        return $this->hasOne(comentario::class, 'propiedad_id', 'id_p'); 
    }
    public function agenda_visita(){
        return $this->hasOne(agenda_visita::class, 'propiedad_id', 'id_p'); 
    }
    public function imagenes_propiedad(){
        return $this->hasOne(imagenes_propiedad::class, 'propiedad_id', 'id_p'); 
    }
}
