<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    // Muestra todos los libros
    // @return response

    public function index(){
        return view('libros.index');
    }
}
