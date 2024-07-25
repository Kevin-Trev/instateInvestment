<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagenes_propiedad extends Model
{
    use HasFactory;
    protected $filiable=[
        'reg', 'propiedad_id', 'src_image'
];
public function propiedad(){
    return $this->belongsToMany(propiedad::class, 'id_p', 'propiedad_id');
}
}
