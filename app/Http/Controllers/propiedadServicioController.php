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
            $propiedad->Servicio_id = $request->input('servicios');
            $propiedad->Propiedad_id = $request->input('propiedad');
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
