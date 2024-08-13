<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\propiedades;
use App\Models\imagenes_propiedad;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Exception;
use Carbon\Carbon;


class UsuariosController extends Controller
{   

    public function informacionUsuario($id) { //datos usuario para perfil //

        $user = auth()->user();

        if ($user->id != $id) {
            return redirect(url()->previous());
        }
        else {
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

            return view('hubs.perfil', compact('propiedades'));
        }
    }

    public function verificarMail(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
    
        $correoExiste = User::where('email', $request->input('email'))->exists();
    
        return response()->json(['existe' => $correoExiste]);
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
            $user->Telefono = '+52'.$request->Telefono;
            $user->Fecha_Nacimiento = $request->Fecha_Nacimiento;
            $user->Calificacion = 1;
            $user->administrador = 0;
            $user->activo = 1;
            $user->email_verified_at = now();
            $user->remember_token = Str::random(60);
           
            if($user->save()){
                DB::commit();
                Auth::login($user);
                Mail::send('correo.bienvenida', [], function ($message) use ($user){
                    $message->to($user->email)->subject('Nuevo usuario')->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                });
                return redirect('/views/registro/finalizado');
            }
        }
        catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function editarUsuario(Request $request, $id) {

        $user = User::findOrFail($id);

        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile_photos', $filename); 
            if ($user->Foto) {
                Storage::delete('profile_photos/' . $user->Foto);
            }
            $user->Foto = $filename;
        }
    
        $user->name = $request->input('name');
        $user->Nombre = $request->input('Nombre');
        $user->Apellido = $request->input('Apellido');
        $user->Telefono = $request->input('Telefono');
        $user->Fecha_Nacimiento = $request->input('Fecha_Nacimiento');

        $user->save();

        return redirect('/views/hubs/perfil/'.$id);
    }

    public function login () {
        $credenciales = request()->only('email','password');

        if(Auth::attempt($credenciales)){
            if(Auth::user()->activo) {
                if(Auth::user()->administrador){
                    request()->session()->regenerate();
                    return redirect('/perfil-administrador');
                }
                else{
                    request()->session()->regenerate();
                    return redirect('/views/catalogo');    
                }
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

    public function correoRestablecer(Request $request){
        $user = user::where('email', $request->email)->first();

        if($user){
            $token = Str::random(64);
        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('correo.recuperarContraseña', ['token' => $token, 'email' => $request->email], function($message) use ($request){
            $message->to($request->email);
            $message->subject('Recuperar contraseña');
        });

        return redirect()->route('correoEnviado');
        }

        else {
            return redirect()->back()->with('error', 'El correo electronico no existe');
        }

    }

    public function formularioActualizar($token, $email){
        return view('Login-Register.restablecerContraseña', ['token' => $token, 'email' => $email]);
    }

    public function actualizarContraseña(Request $request){

        $tokenExists = DB::table('password_reset_tokens')->where('token', $request->token)->exists();

        if(!$tokenExists){
            return redirect()->route('error');
        }

        $updatePassword = DB::table('password_reset_tokens')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$updatePassword){
            return back()->withInput()->with('error', 'Token inválido');
        }

        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        return redirect()->route('login')->with('message', 'Tu contraseña se ha cambiado correctamente');
    }
    public function mostrarPerfilAdmin()
{
   
    $propiedadesNoVerificadas = Propiedades::where('verificacion', false)->get();

    return view('admin.perfilAd', ['propiedades' => $propiedadesNoVerificadas]);

}
}

