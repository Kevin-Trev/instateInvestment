<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PROPIEDAD_SERVICIO;
use Illuminate\Support\Facades\DB;
use Exception;

class propiedadServicioController extends Controller
{
    public function store(Request $request){
       
        DB::beginTransaction();

        try{
            $propiedad = new PROPIEDAD_SERVICIO();
            $propiedad->Servicio_id = 1;
            $propiedad->Propiedad_id = 2;

            
            // foreach ($request['servicios'] as $key => $value) {
            //     $servicios = Servicios::find($key);
            // }

            

            // foreach ($request['servicios'] as $key => $value) {
            //     $servicio = new PROPIEDAD_SERVICIO();
            //     $servicio->Propiedad_id = $key;
            //     $servicio->Servicio_id = $value;
            //     $servicio->save();
            // }

            if($propiedad->save()){
                DB::Commit();
                return alert('Se ha creado con éxito');
            }
        }
        catch(\Exception $e){
            DB::Rollback();
            return response()->json(['error al crear registro: ' . $e->getMessage()]);
        }
    }
}
