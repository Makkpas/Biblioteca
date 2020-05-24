<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Autor;
use App\Genero;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $libros = Libro::orderBy('created_at','desc')
            ->take(6)
            ->get();

        $autores = Autor::orderBy('created_at','desc')
            ->take(6)
            ->get();

        $generos = Genero::orderBy('created_at','desc')
            ->take(6)
            ->get();
        return view('home',[
            'libros'=>$libros,
            'autores'=>$autores,
            'generos'=>$generos,
        ]);
    }
}
