<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class curriculum extends Controller
{
    function index () {
        return view('dashboard.curriculum.index', ['PageName' => 'Curriculum']);
    }
}
