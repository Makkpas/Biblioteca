<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Autor;
use App\Http\Requests\AutorRequest;

class AutoresController extends Controller
{
    public function index(){
        
        $autores = Autor::all();

        return view('autores.index', [
            'autores' => $autores
        ]);
    }

    public function create(){
        return view('autores.create');
    }

    public function store(AutorRequest $request){
        
        $data = $request->validated();
        
        $avatar = 'storage/avatars/notfound.png';

        if($request->hasFile('avatar')){
            $file = $data['avatar'];

            $avatar = time() . Str::kebab( $file->getClientOriginalName());

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


    public function show(Autor $autor){
        return view('autores.show',[
            'autor'=>$autor
        ]);
    }

    public function edit(Autor $autor){
        return view('autores.edit',[
            'autor'=>$autor
        ]);
    }

    public function update(AutorRequest $request, Autor $autor){
        $data = $request->validated();
        
        $avatar = $autor->avatar;

        if($request->hasFile('avatar')){
            $file = $data['avatar'];

            $avatar = time() . Str::kebab( $file->getClientOriginalName());

            $file->storeAs('public/avatars', $avatar);

            $avatar = 'storage/avatars/' . $avatar;
        }

        $data['avatar'] = $avatar;

        if($autor->update($data)){
            return redirect(route('autores.index'));
        }

        dd($data);
    }

    public function destroy(Autor $autor){

        if($autor->delete()){
            return response()->json(['error' => 'false'], 202);
        }
        return response()->json(['error' => 'true'], 202);
    }
}
