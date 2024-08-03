<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\PROPIEDAD_SERVICIO;

class propiedadServicioController extends Controller
{
    public function store(Request $request){
        DB::beginTransaction();

        try{
            $propiedad = new PROPIEDAD_SERVICIO();
            $propiedad->Servicio_id = $request->select('tipoPropiedad');
            if($propiedad->save()){
                DB::Commit();
                return alert('Se ha creado con éxito');
            }
        }
        catch(\Exception $e){
            DB::Rollback();
            return alert('No se ha podido guardar el registro');
        }
    }
}
