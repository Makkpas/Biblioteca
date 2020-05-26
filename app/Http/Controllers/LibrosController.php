<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Http\Requests\LibroRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LibrosController extends Controller
{
    // Muestra todos los libros
    // @return response

    public function __construct(){
       $this->middleware('auth', 
       [
           'except'=>[
               'index',
               'show',
           ],
        ]);
    }


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
    public function store(LibroRequest $request){

        $data = $request->validated();

        $userId = Auth::user()->id;

        $portada['portada'] = 'notfound.jpg';

        if($request->hasFile('portada')){
            $file = $data['portada'];

            $portada = time() . Str::kebab( $file->getClientOriginalName());

            $file->storeAs('public/portadas', $portada);

            $portada = 'storage/portadas/' . $portada;
        }

        $data['portada'] = $portada;

        $data['user_id'] = $userId;

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
            'libro'=>$libro
        ]);
    }



    public function update(LibroRequest $request, Libro $libro){

        $data = $request->validated();

        $portada = $libro->portada;

        if($request->hasFile('portada')){
            $file = $data['portada'];

            $portada = time() . Str::kebab( $file->getClientOriginalName());

            $file->storeAs('public/portadas', $portada);

            $portada = 'storage/portadas/' . $portada;
        }

        $data['portada'] = $portada;


        if($libro->update($data)){
            return redirect(route('libros.index'));
        }
        dd($data);
     
    }

    
    /*Este metodo se encarga de eliminar un libro
    Ustedes deciden si eliminar del todo o hacer un softdelete
    
    @param Libro $libro
    @return response
    */
    public function destroy(Libro $libro){

        if($libro->delete()){
            return response()->json(['error' => 'false'], 202);
        }
        return response()->json(['error' => 'true'], 202);
    }

}
