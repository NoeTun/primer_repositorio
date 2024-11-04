<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        return view('VISTAS.c');
    }
    public function dos(){
        return view('VISTAS.c++');
    }
    public function tres(){
        return view('VISTAS.inicio');
    }
    public function cuatro(){
        return view('VISTAS.java');
    }
    public function cinco(){
        return view('VISTAS.php');
    }
    public function seis(){
        return view('VISTAS.python');
    }
}
