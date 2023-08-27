<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
}
