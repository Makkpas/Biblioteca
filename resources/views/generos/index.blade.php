@extends('layouts.app');

@section('content')

    <div class="container">
        <h2>@lang('Acá van a ir los generos')</h2>
        <a href="{{route('generos.create')}}">@lang('Insertar autor')</a>

        <div class="row">
            @foreach ($generos as $genero)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$genero->nombre}}</h5>
                            <a href="{{route('generos.show', $genero)}} " class="btn btn-primary">@lang('Ver más')</a>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>
    
@endsection