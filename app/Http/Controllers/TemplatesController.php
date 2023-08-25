<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    public function curriculum() {
      
        $data = 1;

        return view('templates.curriculum',compact('data'), ['PageName' => 'Curriculum'] );
    }
    
}
