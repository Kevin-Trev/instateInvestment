<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use App\Models\propiedades;
use App\Models\reportes;
use App\Models\imagenes_propiedad;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Exception;
use Carbon\Carbon;


class usuariosController extends Controller
{   

    public function informacionUsuario($id) { //datos usuario para perfil //

        $user = auth()->user();

        if ($user->id != $id) {
            return redirect(url()->previous());
        }
        else {

            if($user->administrador){
                return redirect('/perfil-administrador');    
            }
            else{
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

                $VizualizacionesT = propiedades::where('users_Id', '=', $id)->sum('Interacciones');
                $ComunicacionesT = propiedades::where('users_Id', '=', $id)->sum('Veces_Comunicado');
                $verificacionesT = Propiedades::where('users_Id', '=', $id)
                ->where('Verificacion', '=', 1)
                ->count('Verificacion');
                $NoverificacionesT = Propiedades::where('users_Id', '=', $id)
                ->where('Verificacion', '=', 0)
                ->count('Verificacion');

<<<<<<< Updated upstream
                return view('hubs.perfil', compact('propiedades','VizualizacionesT','verificacionesT','NoverificacionesT'));    
=======


                return view('hubs.perfil', compact('propiedades','VizualizacionesT','verificacionesT','NoverificacionesT', 'verificacionesT','ComunicacionesT'));    
>>>>>>> Stashed changes
            }
        }
    }

    // Verificar si existen estos datos //
    public function verificarUsername(Request $request){
        $username = $request->name;
        $userExistente = User::where('name', $username)->exists();
        return response()->json(['existe' => $userExistente]);
    }

    public function verificarMail(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $correoExiste = User::where('email', $request->input('email'))->exists();
        return response()->json(['existe' => $correoExiste]);
    }

    public function verificarTelefono (Request $request){
        $telefono = $request->Telefono;
        $telefonoExistente = User::where('Telefono',$telefono)->exists();
        return response()->json(['existe' => $telefonoExistente]);
    }
    //////////////////////////////////////////

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
                try {
                    Mail::send('correo.bienvenida', [], function ($message) use ($user) {
                        $message->to($user->email)
                                ->subject('Nuevo usuario')
                                ->from('instateInvestment@gmail.com' , 'Instate Investment');
                    });
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Error al enviar el correo: ' . $e->getMessage()]);
                }
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
        $user->Fecha_Nacimiento = $request->input('Fecha_Nacimiento');

        $user->save();

        return redirect(url()->previous());
    }

    public function login () {
        $credenciales = request()->only('email','password');

        if(Auth::attempt($credenciales)){
            if(Auth::user()->activo) {
                if(Auth::user()->administrador){
                    request()->session()->regenerate();
                    return Response::json([
                        'status' => 'success',
                        'redirect' => '/perfil-administrador'
                    ]);
                }
                else{
                    request()->session()->regenerate();
                    return Response::json([
                        'status' => 'success',
                        'redirect' => '/views/catalogo'
                    ]);
                }
            }
            else {
                Auth::logout();
                return Response::json([
                    'status' => 'error',
                    'message' => 'Esta cuenta está suspendida. <br> Ponte en contacto con el administrador del sitio web.'
                ]);
            }
        }
        else{
            return Response::json([
                'status' => 'error',
                'message' => 'Direccion de Correo y/o Contraseña Incorrecta.'
            ]);
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

        $propiedadesReportadas = Propiedades::whereIn('ID_P', function ($query) {
            $query->select('Propiedad_id')
                  ->from('reportes');
        })->distinct()->get();

        return view('admin.perfilAd',compact('propiedadesReportadas'), ['propiedades' => $propiedadesNoVerificadas]);

    }
}

