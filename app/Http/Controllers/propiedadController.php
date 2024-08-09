<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\propiedades;
use App\Models\COMENTARIO;
use App\Models\imagenes_propiedad;
use Exception;

class PropiedadController extends Controller
{
    public function index () {
        $propiedades = propiedades::select('ID_P','Calle','num_exterior','Colonia','Precio','Recamaras','Baños','Area','Vendible','Rentable','Tipo_Propiedad_id')
                                    ->with("tipo_propiedad:ID_T,Tipo")
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

    public function propiedadesResultados($transaccion, $ciudad){
        $propiedades = propiedades::select('ID_P','Calle','num_exterior','Colonia','Precio','Recamaras','Baños','Area','Vendible','Rentable','Tipo_Propiedad_id')
                                    ->with("tipo_propiedad:ID_T,Tipo")
                                    ->with(['imagenes_propiedad' => function($query) {
                                        $query->select('reg','propiedad_id','src_image');
                                    }])
                                    ->where($transaccion,'=','1')
                                    ->where('Ciudad','like',$ciudad . '%')
                                    ->get()
                                    ->map(function($propiedad) {
                                        $propiedad->main_image = $propiedad->imagenes_propiedad->first() ?: null;
                                        return $propiedad;
                                    });
        return response()->json($propiedades);

    }

    public function propiedadesUsuario ($id) {
        $propiedades = propiedades::with("tipo_propiedad:ID_T,Tipo")
                                    ->with(['imagenes_propiedad' => function($query) {
                                        $query->select('reg','propiedad_id','src_image');
                                    }])
                                    ->where('users_Id','=',$id)
                                    ->get()
                                    ->map(function($propiedad) {
                                        $propiedad->main_image = $propiedad->imagenes_propiedad->first() ?: null;
                                        return $propiedad;
                                    });
        return response()->json($propiedades);
    }

    public function getProperty($id){

        $propiedad = propiedades::with(
            "tipo_propiedad:ID_T,Tipo",
            "users:id,Telefono",
            "imagenes_propiedad:reg,propiedad_id,src_image")
            ->find($id);
    
        $moreProperties = propiedades::where('ID_P','!=',$id)
                                    ->with("users:id,Telefono")
                                    ->with(['imagenes_propiedad' => function($query) {
                                        $query->select('reg','propiedad_id','src_image');
                                    }])
                                    ->inRandomOrder()
                                    ->take(4)
                                    ->get()
                                    ->map(function($propiedad) {
                                        $propiedad->main_image = $propiedad->imagenes_propiedad->first() ?: null;
                                        return $propiedad;
                                    });
        
        $comentarios = COMENTARIO::where('Propiedad_id','=',$id)
        ->with("users:id,name,Foto")
        ->orderBy('Fecha','DESC')
        ->get();
    

        return view('detallesPropiedad', compact('propiedad','comentarios','moreProperties'));
    }

    public function newProperty (Request $request) {    /* agregar request en caso de formulario */

        DB::beginTransaction();

        try{

            $propiedad = new propiedades();

            $propiedad->Titulo = $request->input('Titulo');
            $propiedad->Precio = $request->input('Precio');
            $propiedad->Recamaras = $request->input('Recamaras');
            $propiedad->Baños = $request->input('Baños');
            $propiedad->Disponibilidad = 1;
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
            $propiedad->users_Id = 1; // cambiar 1 por 'auth()->id();
            $propiedad->Tipo_Propiedad_id = $request->input('Tipo_Propiedad_id');

            if($propiedad->save()){    

                registrarServicios($request, $propiedad->ID_P);
                uploadImagesProperty($request, $propiedad->ID_P);
                DB::commit();
            }
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['Error al crear registro: ' . $e->getMessage()], 500);

        }
    }

    private function regServicios(Request $request, $id) {

    }

    private function uploadImagesProperty (Request $request , $id) {
        
        if($request->hasFile('imagenes')) {

            foreach ($request->file('imagenes') as $file) {
                $fileName = Str::random(20 . '.' . $file->getClientOriginalExtension());
                $file->move(public_path('ImagesPublished'), $fileName);

                imagenes_propiedad::create([
                    'propiedad_id' => $id,
                    'src_image' => $fileName,
                ]);
            }
        }
    }
}
