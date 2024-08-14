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
        'Precio', 'Recamaras','Baños', 'Disponibilidad', 'Direccion','Codigo_Postal', 'num_exterior','num_interior', 'Colonia',
        'Calle','Ciudad','Estado','Area', 'Frente', 'Fondo', 'Rentable', 'Vendible',
        'users_Id', 'Tipo_Propiedad_id', 'Verificacion'
    ];

    public function tipo_propiedad(){
        return $this->belongsTo(tipo_propiedad::class,'Tipo_Propiedad_id');
    }
    public function imagenes_propiedad(){
        return $this->hasMany(imagenes_propiedad::class, 'propiedad_id'); 
    }
    public function users(){
        return $this->belongsTo(User::class, 'users_Id', 'id');
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
    public function reportes(){
        return $this->hasOne(reportes::class, 'propiedad_id', 'id_p'); 
    }
}
