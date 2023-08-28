<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\RecuperarContrasena;


class auths extends Controller
{
    public function index()
    {
        return view('auth.register.index', ['PageName' => 'Registro']);
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'csrfToken' => 'required|max:255',
        ]);

        $user = User::UpdateOrCreate(
            [
                'email' => $request->email,
            ], [
                'name' => $request->nombre,
                'password' => Hash::make($request->password),
                'remember_token' => $request->token,
            ]
        );

        Auth::login($user, true);

        return redirect()->to('/dashboard');

    }

    public function login()
    {
        return view('auth.login.index', ['PageName' => 'Inicia']);
    }

    public function login_auth(Request $request){
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return response()->json(['success' => true, 'message' => 'Bienvenido']);
        } else {
            $user = User::where('email', $credentials['email'])->first();
    
            if (!$user) {
                return response()->json(['success' => false, 'message' => 'El correo ingresado no existe']);
            } else {
                return response()->json(['success' => false, 'message' => 'La contraseña ingresada es incorrecta']);
            }
        }
    }

    function recover(Request $request){
        $request->validate([
            'email' => 'required|max:255|email', // Agregado 'email' para validar el formato del correo
        ]);
    
        $email = $request->input('email');
    
        $user = User::where('email', $email)->first();
    
        if ($user) {
            $userId = $user->id; // Obtener el ID del usuario
            $token = Str::random(64);
    
            // Guardar información en la tabla recuperarcontrasena
            RecuperarContrasena::create([
                'user_id' => $userId, // Asociar el ID del usuario
                'email' => $email,
                'token' => $token,
            ]);
    
            // Enviar el correo electrónico
            Mail::send('emails.reset_password', ['token' => $token], function ($message) use ($email) {
                $message->from(config('mail.from.address'), config('mail.from.name'));
                $message->to($email)->subject('Recuperación de Contraseña');
            });
    
            return response()->json(['success' => true, 'message' => 'Mensaje enviado correctamente']);
        } else {
            return response()->json(['success' => false, 'message' => 'El correo no existe en nuestra base de datos']);
        }
    }
    
    
    

}
