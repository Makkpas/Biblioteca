@extends('layouts.app')

@section('content')

    <div class="container">
        
        <a href="{{route('libros.index')}} ">@lang('Libros')</a>

        <img src="{{ url($libro->portada) }}" class="card-img-top mb-3" alt="{{$libro->titulo}}">
        
        <h2>{{$libro->titulo}}</h2>
        
        <p>{{$libro->resumen}}</p>

        <div class="btn-group" role="group" >
            <a href="{{ route('libros.edit', $libro) }}" type="button" class="btn btn-success">@lang('Editar')</a>
            <button type="button" class="btn btn-danger">@lang('Eliminar')</button>
        </div>
    </div>
        
@endsection