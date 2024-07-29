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
        $propiedades = propiedades::select('ID_P','Titulo','Precio','Recamaras','Baños','Area')
                                    ->where('verificacion','=','1')
                                    ->get();
        return response()->json($propiedades);
    }

    public function getProperty($id){
        $propiedad = propiedades::with("tipo_propiedad:ID_T,Tipo")->find($id);

        $response = [
            'ID_P' => $propiedad->ID_P,
            'Titulo' => $propiedad->Titulo,
            'Precio' => $propiedad->Precio,
            'Recamaras' => $propiedad->Recamaras,
            'Baños' => $propiedad->Baños,
            'Disponibilidad' => $propiedad->Disponibilidad,
            'Codigo_Postal' => $propiedad->Codigo_Postal,
            'num_exterior' => $propiedad->num_exterior,
            'num_interior' => $propiedad->num_interior,
            'Colonia' => $propiedad->Colonia,
            'Calle' => $propiedad->Calle,
            'Ciudad' => $propiedad->Ciudad,
            'Estado' => $propiedad->Estado,
            'Area' => $propiedad->Area,
            'Frente' => $propiedad->Frente,
            'Fondo' => $propiedad->Fondo,
            'Verificacion' => $propiedad->Verificacion,
            'Rentable' => $propiedad->Rentable,
            'Vendible' => $propiedad->Vendible,
            'users_Id' => $propiedad->users_Id,
            'Tipo_Propiedad_id' => $propiedad->tipo_propiedad->Tipo,
        ];

        return response()->json($response);
    }

    public function newProperty () {    /* agregar request en caso de formulario */

        DB::beginTransaction();

        try{

            $propiedad = new propiedades();

            $propiedad->Titulo = 'Casa de Campaña de 2 pisos';
            $propiedad->Precio = 250000;
            $propiedad->Recamaras = 2;
            $propiedad->Baños = 1;
            $propiedad->Disponibilidad = 1;
            $propiedad->Codigo_Postal = '27200';
            // $propiedad->num_exterior = 1546;     'S/N'   Sin Numero
            // $propiedad->num_interior = 2B;     'S/N'   Sin Numero
            $propiedad->Calle = 'Amazonas';
            $propiedad->Colonia = 'Laguna Seca';
            $propiedad->Ciudad = 'Torreón';
            $propiedad->Estado = 'Coahuila';
            $propiedad->Frente = 15;
            $propiedad->Fondo = 20;
            $propiedad->Area = $propiedad->Frente * $propiedad->Fondo;
            $propiedad->Verificacion = 1;
            $propiedad->Rentable = 1;
            $propiedad->Vendible = 0;
            $propiedad->users_Id = 1;
            $propiedad->Tipo_Propiedad_id = 1;

            if($propiedad->save()){
                DB::commit();
                return redirect ('/inicio');
            }
        }
        catch(\Exception $e){
            return response()->json(['error' => 'Registro incorrecto revirtiendo acciones']);
        }
    }
}
