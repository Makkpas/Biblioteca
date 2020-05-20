@extends('layouts.app')

@section('content')

    <div class="container">
        
        <a href="{{route('libros.index')}} ">@lang('Libros')</a>

        <img src="{{ url($libro->portada) }}" class="card-img-top mb-3" alt="{{$libro->titulo}}">
        
        <h2>{{$libro->titulo}}</h2>
        
        <p>{{$libro->resumen}}</p>

    </div>
        
@endsection