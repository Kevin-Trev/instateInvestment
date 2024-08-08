<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Exception;


class UsuariosController extends Controller
{

    public function datosUsuario($id) { //datos usuario para perfil //
        $datos = User::find($id)
                      ->select('name','Nombre','Apellido','Fecha_Nacimiento','Telefono','Foto','email')
                      ->get();
        
        return response()->json($datos);
    }

    public function nuevoUsuario(Request $request) {

        DB::beginTransaction();

        try{     
            
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->Nombre = $request->Nombre;
            $user->Apellido = $request->Apellido;
            $user->Telefono = $request->Telefono;
            $user->Fecha_Nacimiento = $request->Fecha_Nacimiento;
            $user->Calificacion = 1;
            $user->administrador = 0;
            $user->activo = 1;
            $user->email_verified_at = now();
            $user->remember_token = Str::random(10);
           
            if($user->save()){
                DB::commit();

                Mail::send('correo.bienvenida', [], function ($message) use ($user){
                    $message->to($user->email)->subject('Nuevo usuario')->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));

                Auth::login($user);
                });
                return redirect('/views/registro/finalizado');
            }
        }
        catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()]);
        }

    }

    public function login () {
        $credenciales = request()->only('email','password');

        if(Auth::attempt($credenciales)){
            if(Auth::user()->activo) {
                request()->session()->regenerate();
                return redirect('/views/catalogo');
            }
            else {
                Auth::logout();
                return redirect('/views/login')->with('suspendido','Esta cuenta esta suspendida.<br> Ponte en contacto con el administrador del sitio web');
            }
        }
        else{
            return redirect('/views/login')->with('error_login','Correo Electronico y/o Contraseña Invalida');
        }
    }

    public function logout () {
        Auth::logout();
        return redirect('/');
    }

    public function eliminarUsuario () {
        $user = Auth::user();
        $user->delete();
        Auth::logout();
        return redirect('/');
    }

}

