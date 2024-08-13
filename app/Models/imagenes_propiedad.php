<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\propiedades;

class imagenes_propiedad extends Model
{
    use HasFactory;
    protected $table = 'imagenes_propiedad';
    protected $primaryKey = 'reg';
    protected $fillable=[
        'propiedad_id', 'src_image'
    ];
    public $timestamps = false;

    public function propiedad(){
        return $this->belongsTo(propiedades::class, 'id_p');
    }
}
