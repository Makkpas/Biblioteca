@extends('layouts.app')

@section('content')


<div class="container">

    @if (count($libros) > 0)

        <h3>@lang('Libros')</h3>

        <div class="row">
            @foreach ($libros as $libro)
                <a href="{{route('libros.show', $libro)}} " class="col-4">
                    <img width="300" height="230" src="{{ url($libro->portada) }}" alt="{{$libro->titulo}}" style="object-fit: cover">
                    <p class="text-center mt-2">{{$libro->titulo}}</p>
                </a>
            @endforeach
        </div>
        
    @endif
   

    @if (count($autores) > 0)

        <h3>@lang('Autores')</h3>

        <div class="row">
            @foreach ($autores as $autor)
                <a href="{{route('autores.show', $autor)}}" class="col-4">
                    <img width="300" height="230" src="{{ url($autor->avatar) }}" alt="{{$autor->nombre}} {{$autor->apellido}}" style="object-fit: cover">
                    <p class="text-center mt-2">{{$autor->nombre}}  {{$autor->apellido}}</p>
                </a>
            @endforeach
        </div>
        
    @endif
   

    @if (count($generos) > 0)

        <h3>@lang('Generos')</h3>

        <div class="row">
            @foreach ($generos as $genero)
                <a href="{{route('generos.show', $genero)}}" class="col-4">
                    <p class="text-left">{{$genero->nombre}}</p>
                </a>
            @endforeach
        </div>
        
    @endif
   
</div>


@endsection
