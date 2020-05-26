@extends('layouts.app');

@section('content')

    <div class="container">
        <a href="{{route('generos.index')}} ">@lang('Generos')</a>

        <h2 class="card-title">{{$genero->nombre}}</h2>

        <div class="btn-group" role="group" >
            <a href="{{ route('generos.edit', $genero) }}" type="button" class="btn btn-success">@lang('Editar')</a>
            <button type="button" class="btn btn-danger btn-eliminar-genero" data-id="{{$genero->id}}">@lang('Eliminar')</button>
        </div>
    </div>
    
@endsection