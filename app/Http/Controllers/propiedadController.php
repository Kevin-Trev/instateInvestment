<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\propiedades;
use Exception;

class PropiedadController extends Controller
{
    public function index () {
        $propiedades = propiedades::select('ID_P','Calle','num_exterior','Colonia','Precio','Recamaras','Baños','Area','Vendible','Rentable')
                                    ->with(['imagenes_propiedad' => function($query) {
                                        $query->select('reg','propiedad_id','src_image');
                                    }])
                                    ->get()
                                    ->map(function($propiedad) {
                                        $propiedad->main_image = $propiedad->imagenes_propiedad->first() ?: null;
                                        return $propiedad;
                                    });
        return response()->json($propiedades);
    }

    public function getProperty($id){

        $propiedad = propiedades::with("tipo_propiedad:ID_T,Tipo", "users:id,Telefono", "imagenes_propiedad:reg,propiedad_id,src_image")->find($id);

        return view('detallesPropiedad', compact('propiedad'));
    }

    public function newProperty (Request $request) {    /* agregar request en caso de formulario */

        DB::beginTransaction();

        try{

            $propiedad = new propiedades();

            $propiedad->Titulo = $request->input('Titulo');
            $propiedad->Precio = $request->input('Precio');
            $propiedad->Recamaras = $request->input('Recamaras');
            $propiedad->Baños = $request->input('Baños');
            $propiedad->Disponibilidad = $request->input('Disponibilidad');
            $propiedad->Codigo_Postal = $request->input('Codigo_Postal');
            $propiedad->num_exterior = $request->input('num_exterior');
            $propiedad->num_interior = $request->input('num_interior');
            $propiedad->Calle = $request->input('calle');
            $propiedad->Colonia = $request->input('Colonia');
            $propiedad->Ciudad = $request->input('Ciudad');
            $propiedad->Estado = $request->input('Estado');
            $propiedad->Frente = $request->input('Frente');
            $propiedad->Fondo = $request->input('Fondo');
            $propiedad->Area = $request->input('Area');
            $propiedad->Verificacion = 0;
            $propiedad->Rentable = $request->input('Rentable');
            $propiedad->Vendible = $request->input('Vendible');
            $propiedad->users_Id = 1; // cambiar 1 por 'auth()->id();'
            $propiedad->Tipo_Propiedad_id = $request->input('Tipo_Propiedad_id');

            if($propiedad->save()){
                DB::commit();
            }
        }
        catch(\Exception $e){
            return response()->json(['Error al crear registro: ' . $e->getMessage()], 500);

        }
    }
}
