<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\COMENTARIO;
use Illuminate\Support\Facades\DB;
use Exception;

class comentarioController extends Controller
{
    public function index () {
        $comentarios = COMENTARIO::All();
        return response()->json($comentarios);
    }

    public function comentar(Request $request) {

        DB::beginTransaction();

        try{
            $comentario = new COMENTARIO();

            $comentario->Comentario = $request->Comentario;
            $comentario->Fecha = today(); // toma SOLO la fecha de HOY //
            $comentario->users_id = $request->user_id;
            $comentario->Propiedad_id = $request->propiedad_id;

            if($comentario->save()){
                DB::commit();
                return redirect('/get/property/'.$request->propiedad_id);
            }
        }
        catch (\Exception $e){
            DB::rollback();
            return response()->json('error: revirtiendo cambios');
        }



    }

}
