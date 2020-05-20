<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Http\Requests\CrearLibroRequest;

class LibrosController extends Controller
{
    // Muestra todos los libros
    // @return response

    public function index(){

        $libros = Libro::all();

        // Una forma de traer todos los libros de la base de datos
        // return view('libros.index')->with('libros', $libros);

        return view('libros.index',[
            'libros'=>$libros
        ]);
    }


    // Muestra el form de insertar
    // @return response
    public function create(){
        return view('libros.create');
    }


     // Ser encarga de insertar el libro en la base de datos
    //  @var \App\Http\Request\CrearLibroRequest $request
    // @return response
    public function store(CrearLibroRequest $request){

        $data = $request->validated();

        $portada['portada'] = 'notfound.jpg';

        if($request->hasFile('portada')){
            $file = $data['portada'];

            $portada = time() . $file->getClientOriginalName();

            $file->storeAs('public/portadas', $portada);

            $portada = 'storage/portadas/' . $portada;
        }

        $data['portada'] = $portada;

        $libro = Libro::create($data);

        if($libro){
            return redirect(route('libros.index'));
        }
        dd($data);
    }


    /*Este metodos es para mostrar un libro
    
    @param Libro $libro
    @return response
    */
    public function show(Libro $libro){
        return view('libros.show', [
            'libro'=>$libro
        ]);
    }

    
    // Ser encarga de modificar el libro en la base de datos
    //  @var \App\Http\Request\CrearLibroRequest $request
    // @return response
    public function edit(Libro $libro){
        return view('libros.edit', [
            'libros'=>$libro
        ]);
    }



    public function update(CrearLibroRequest $request){

        $data = $request->validated();

        if($request->hasFile('portada')){
            $file = $data['portada'];

            $portada = time() . $file->getClientOriginalName();

            $file->storeAs('public/portadas', $portada);

            $portada = 'storage/portadas/' . $portada;
        }

        $data['portada'] = $portada;

        $findLibro = Libro::find($data['isbn']);

        $updateLibro = Libro::where('id', $findLibro['id'])
                        ->update($data);

        if($updateLibro){
            return redirect(route('libros.index'));
        }
        dd($updateLibro);
     
    }

    
    /*Este metodo se encarga de eliminar un libro
    Ustedes deciden si eliminar del todo o hacer un softdelete
    
    @param Libro $libro
    @return response
    */
    public function delete(Libro $libro){}

}
