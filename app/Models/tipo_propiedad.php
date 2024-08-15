<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_propiedad extends Model
{
    use HasFactory;

    protected $table = 'tipo_propiedad';
    protected $primaryKey = 'ID_T';

    protected $filiable=[ 
        'tipo'
    ];
    
    public function propiedad(){
        return $this->hasOne(propiedades::class, 'ID_T');
    }
}
