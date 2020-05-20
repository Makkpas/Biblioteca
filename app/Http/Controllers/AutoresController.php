<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Http\Requests\CrearAutorRequest;

class AutoresController extends Controller
{
    public function index(){
        
        $libros = Libro::all();

        return view('autores.index', [
            'libros' => $libros
        ]);
    }

    public function create(){
        return view('autores.create');
    }

    public function store(CrearAutorRequest $request){
        
        $data = $request->validated();
        
        $avatar = 'storage/avatars/notfound.jpg';

        if($request->hasFile('avatar')){
            $file = $data['avatar'];

            $avatar = time() . $file->getClientOriginalName();

            $file->storeAs('public/avatars', $avatar);

            $avatar = 'storage/avatars/' . $avatar;
        }

        $data['avatar'] = $avatar;

        $autor = Autor::create($data);

        if($autor){
            return redirect(route('autores.index'));
        }

        dd($data);
    }
}
