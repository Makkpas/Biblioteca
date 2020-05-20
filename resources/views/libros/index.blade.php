@extends('layouts.app')

@section('content')

    <div class="container">
        {{-- Para traducir estan 2 formas--}}
        {{-- <h2>{{__('Acá van a ir todo los libros')}}</h2> --}} 
        
        <h2>@lang('Acá van a ir todo los libros')</h2>

        <a href="{{route('libros.create')}} ">@lang('Insertar libro')</a>

        <div class="row">
            @foreach ($libros as $libro)
                <div class="col-4">
                    <div class="card">
                        <img src="{{ url($libro->portada) }}" class="card-img-top" alt="{{$libro->titulo}}">
                        <div class="card-body">
                        <h5 class="card-title">{{$libro->titulo}}</h5>
                        <a href="{{route('libros.show', $libro)}} " class="btn btn-primary">@lang('Ver más')</a>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
        
@endsection