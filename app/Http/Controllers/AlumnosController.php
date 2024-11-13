<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    function listar (){
        return view("alumnos.listar");
}
}
