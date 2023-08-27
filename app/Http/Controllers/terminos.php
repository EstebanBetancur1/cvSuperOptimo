<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class terminos extends Controller
{
    
    public function Politicas()
    {
        return view('pages.terminos', ['PageName' => 'Terminos y condiciones']);
    }
}
