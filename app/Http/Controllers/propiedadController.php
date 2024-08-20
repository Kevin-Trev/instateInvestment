<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\propiedades;
use App\Models\comentario;
use App\Models\imagenes_propiedad;
use App\Models\propiedad_servicio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\reportes;
use Exception;

class PropiedadController extends Controller
{
    public function index () {
        $propiedades = propiedades::with("tipo_propiedad:ID_T,Tipo","users:id,Telefono,Activo")
                                    ->where('Disponibilidad','=','1')
                                    ->with(['imagenes_propiedad' => function($query) {
                                        $query->select('reg','propiedad_id','src_image');
                                    }])
                                    ->whereHas('users', function ($query) {
                                        $query->where('Activo', '=', '1');
                                    })
                                    ->get()
                                    ->map(function($propiedad) {
                                        $propiedad->main_image = $propiedad->imagenes_propiedad->first() ?: null;
                                        return $propiedad;
                                    });
        return response()->json($propiedades);
    }

    public function propiedadesResultados($transaccion, $ciudad){
        $propiedades = propiedades::select('ID_P','Calle','num_exterior','Colonia','Precio','Recamaras','Baños','Area','Vendible','Rentable','Tipo_Propiedad_id','users_Id')
                                    ->with("tipo_propiedad:ID_T,Tipo","users:id,Telefono,Activo")
                                    ->with(['imagenes_propiedad' => function($query) {
                                        $query->select('reg','propiedad_id','src_image');
                                    }])
                                    ->whereHas('users', function ($query) {
                                        $query->where('Activo', '=', '1');
                                    })
                                    ->where($transaccion,'=','1')
                                    ->where('Ciudad','like',$ciudad . '%')
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
            $propiedad->increment('Interacciones');
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
        
        $comentarios = comentario::where('Propiedad_id','=',$id)
        ->with("users:id,name,Foto")
        ->orderBy('Fecha','DESC')
        ->get();

        return view('detallesPropiedad', compact('propiedad','comentarios','moreProperties'));
    }

    public function getDataProperty($id){
        $propiedad = propiedades::find($id);
        return response()->json($propiedad);
    }

    public function getPropertyadmin($id){

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
        
        $comentarios = comentario::where('Propiedad_id','=',$id)
        ->with("users:id,name,Foto")
        ->orderBy('Fecha','DESC')
        ->get();

        $reportes = reportes::where('propiedad_id','=',$id)
        ->with("users:id,name,Foto")
        ->orderBy('fecha_reporte','DESC')
        ->get();

        $cantidadreportes = reportes::where('propiedad_id','=',$id)
        ->get();

        return view('admin.revisar', compact('propiedad','comentarios','reportes','cantidadreportes'));
    }
    
    public function newProperty(Request $request){   

    $usuario = Auth::user()->id;
    DB::beginTransaction();

        try{

            // Decodificacion del array de servicios

            $serviciosArray = $request->input('servicios');
            $servicios = json_decode($serviciosArray, true);

            // Imagenes

            $imagenes = $request->file('Imagenes');

            //Mayusculas al inicio
            $ciudad = $request->input('Ciudad');
            $Ciudad = Str::ucfirst($ciudad);
            $calle = $request->input('Calle');
            $Calle = Str::ucfirst($calle);

            // Crear nuevo registro

            $propiedad = new propiedades();
            $propiedad->Precio = $request->input('Precio');
            $propiedad->Recamaras = $request->input('Recamaras');
            $propiedad->Baños = $request->input('Baños');
            $propiedad->Disponibilidad = 1;
            $propiedad->Codigo_Postal = $request->input('Codigo_Postal');
            $propiedad->num_exterior = $request->input('num_exterior');
            $propiedad->num_interior = $request->input('num_interior');
            $propiedad->Colonia = $request->input('Colonia');
            $propiedad->Calle = $Calle;
            $propiedad->Ciudad = $Ciudad;
            $propiedad->Estado = $request->input('Estado');
            $propiedad->Area = $request->input('Area');
            $propiedad->Frente = $request->input('Frente');
            $propiedad->Fondo = $request->input('Fondo');
            $propiedad->Verificacion = 0;
            $propiedad->Rentable = $request->input('Rentable');
            $propiedad->Vendible = $request->input('Vendible');
            $propiedad->users_Id = Auth::user()->id;
            $propiedad->Tipo_Propiedad_id = $request->input('Tipo_Propiedad_id');
            $propiedad->Interacciones = 0;
            $propiedad->Veces_Comunicado = 0;

            if($propiedad->save()){
                foreach($servicios as $servicio){
                    propiedad_servicio::Create([
                        'Propiedad_id' => $propiedad->ID_P,
                        'Servicio_id' => $servicio,
                    ]);
                }

                foreach ($imagenes as $file) {
                    $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('ImagesPublished'), $fileName);
    
                    imagenes_propiedad::create([
                        'propiedad_id' => $propiedad->ID_P,
                        'src_image' => $fileName,
                    ]);
                }
            }  

            DB::Commit();
            return response()->json(['success' => true, 'user' => $usuario]);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['status' => $e->getMessage()]);
        }
    }

    private function regServicios(Request $request, $id) {

    }

    public function VerEnMaps($id)
    {
        $propiedad = propiedades::findOrFail($id);

        $direccion = $propiedad->Calle . ', ' . $propiedad->num_exterior . ' ' . $propiedad->num_interior . ', ' .
                    $propiedad->Colonia . ', ' . $propiedad->Ciudad . ', ' . $propiedad->Estado . ', ' . 
                    $propiedad->Codigo_Postal;

        return view('hubs.Maps', compact('direccion'));
    }

    public function showPublicacionesNoVerificadas()
    {
        $propiedades = propiedades::where('verificacion', false)->get();
        return view('admin.perfilAd', compact('propiedades'));
    }

    public function verificar($ID_P)
    {
        $propiedades = propiedades::find($ID_P);

        if ($propiedades) {
            $propiedades->verificacion = 1;
            $propiedades->save();

            return redirect()->back()->with('success', 'Propiedad verificada con éxito.');
        }

        return redirect()->back()->with('error', 'Propiedad no encontrada.');
    }

    public function eliminar($ID_P)
{
    $propiedad = Propiedades::find($ID_P);

    if ($propiedad) {
        $propiedad->delete();
        // Redirige de vuelta a la misma página
        return redirect()->back()->with('success', 'Propiedad eliminada con éxito.');
    }

    return redirect()->back()->with('error', 'Propiedad no encontrada.');
}

  

    public function verificarDetalles($ID_P){
        $propiedades = propiedades::find($ID_P);

        if ($propiedades) {
            $propiedades->verificacion = 1;
            $propiedades->save();

            return redirect()->back()->with('success', 'Propiedad verificada con éxito.');
        }
        return redirect()->back()->with('error', 'Propiedad no encontrada.');
    }

    public function eliminarDetalles($ID_P)
{
    $propiedad = Propiedades::find($ID_P);

    if ($propiedad) {
        $propiedad->delete();
     
        return redirect()->route('admin.perfilAd')->with('success', 'Propiedad eliminada con éxito.');
    }

    return redirect()->back()->with('error', 'Propiedad no encontrada.');
}



public function suspender($ID_P)
{
    $propiedades = propiedades::find($ID_P);

    if ($propiedades) {
        $propiedades->disponibilidad = 0;
        $propiedades->save();

        return response()->json(['success' => true, 'ID_P' => $ID_P]);
    }

    return response()->json(['success' => false, 'message' => 'Propiedad no encontrada.']);
}


// public function incrementarVecesComunicado($id) {
//     try {
//         $propiedad = propiedades::findOrFail($id);
//         $propiedad->increment('Veces_Comunicado'); // Incrementa el campo Veces_Comunicado en 1
//         return response()->json(['success' => true]);
//     } catch (\Exception $e) {
//         return response()->json(['success' => false, 'message' => $e->getMessage()]);
//     }
// }

public function editarPropiedad(Request $request)
{
    // Validar los datos del formulario
    $validatedData = $request->validate([
        'ID_P' => 'required|integer|exists:propiedades,ID_P',
        'Precio' => 'required|numeric',
        'Calle' => 'required|string|max:255',
        'Colonia' => 'required|string|max:255',
        'num_exterior' => 'nullable|integer',
        'num_interior' => 'nullable|integer',
        'Codigo_Postal' => 'required|integer',
    ]);

    try {
        // Encontrar la propiedad por su ID
        $propiedad = propiedades::findOrFail($validatedData['ID_P']);

        // Actualizar los campos de la propiedad
        $propiedad->Precio = $validatedData['Precio'];
        $propiedad->Calle = $validatedData['Calle'];
        $propiedad->Colonia = $validatedData['Colonia'];
        $propiedad->num_exterior = $validatedData['num_exterior'];
        $propiedad->num_interior = $validatedData['num_interior'];
        $propiedad->Codigo_Postal = $validatedData['Codigo_Postal'];

        // Guardar los cambios en la base de datos
        $propiedad->save();

        // Redirigir a la vista de perfil o mostrar un mensaje de éxito
        return redirect()->back()->with('success', 'Propiedad actualizada correctamente');
    } catch (\Exception $e) {
        // Manejar errores y redirigir con un mensaje de error
        return redirect()->back()->with('error', 'Ocurrió un error al actualizar la propiedad');
    }
}


}


