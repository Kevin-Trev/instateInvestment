<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'Nombre',
        'Apellido',
        'Telefono',
        'Fecha_Nacimiento',
        'Calificacion'
       
    ];
    public function suscripciones(){
        return $this->hasOne(suscripcion_vip::class, 'users_id', 'id');
    }
    public function propiedades(){
        return $this->hasOne(propiedad::class, 'users_id', 'id');
    }
    public function cotizacion(){
        return $this->hasOne(cotizacion::class, 'users_id', 'id');
    }
    public function comentario(){
        return $this->hasOne(comentario::class, 'users_id', 'id');
    }
    public function agenda_visita(){
        return $this->hasOne(agenda_visita::class, 'users_id', 'id');
    }
    public function reportes(){
        return $this->hasOne(reportes::class, 'users_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
