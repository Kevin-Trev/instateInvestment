<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Exception;


class UsuariosController extends Controller
{

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
                Auth::login($user);
                return redirect('/registro/finalizado');
            }
        }
        catch(\Exception $e){
            DB::rollBack();
            return redirect('/registro')->with('error','Registro incorrecto');
        }

    }

    public function login () {
        $credenciales = request()->only('email','password');

        if(Auth::attempt($credenciales)){
            if(Auth::user()->activo) {
                request()->session()->regenerate();
                return redirect('/');
            }
            else {
                Auth::logout();
                return redirect('/view/login')->with('suspendido','Esta cuenta esta suspendida.<br> Ponte en contacto con el administrador del sitio web');
            }
        }
        else{
            return redirect('/view/login')->with('error_login','Correo Electronico y/o Contraseña Invalida');
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
