<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagenes_propiedad extends Model
{
    use HasFactory;
    protected $table = 'imagenes_propiedad';
    protected $primaryKey = 'reg';
    protected $filiable=[
        'propiedad_id', 'src_image'
];
public function propiedad(){
    return $this->belongsTo(propiedad::class, 'id_p');
}
}
