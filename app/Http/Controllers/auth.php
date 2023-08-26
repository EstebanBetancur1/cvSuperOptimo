<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auth extends Controller
{
    public function index()
    {

        return view('auth.register.index', ['PageName' => 'Registro']);
    }
}
