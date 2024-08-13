<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comentario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;

class comentarioController extends Controller
{
    public function index () {
        $comentarios = comentario::All();
        return response()->json($comentarios);
    }

    public function comentar(Request $request) {

        DB::beginTransaction();
        try{
            $comentario = new comentario();

            $comentario->Comentario = $request->Comentario;
            $comentario->Fecha = today(); // toma SOLO la fecha de HOY //
            $comentario->users_id = $request->user_id;
            $comentario->Propiedad_id = $request->propiedad_id;

            if($comentario->save()){
                DB::commit();
                return redirect('/get/property/'.$request->propiedad_id)->with('comentado', 'Comentario Registrado ( Fecha: '. now().' )');
            }
        }
        catch (\Exception $e){
            DB::rollback();
            return response()->json('error: revirtiendo cambios');
        }
    }

    public function eliminarComentario($id) {
        $comentario = comentario::find($id);
        $propiedad_id = $comentario->Propiedad_id;
        $comentario->delete(); 
        return redirect('/get/property/'.$propiedad_id)->with('comentario_eliminado', 'Comentario Eliminado');
    }
}
