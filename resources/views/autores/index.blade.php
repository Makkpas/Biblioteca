@extends('layouts.app');

@section('content')

    <div class="container">
        <h2>@lang('Acá van a ir los autores')</h2>
        <a href="{{route('autores.create')}}">@lang('Insertar autor')</a>

        <div class="row">
            @foreach ($autores as $autor)
                <div class="col-4">
                    <div class="card">
                        <img src="{{ url($autor->avatar) }}" class="card-img-top" alt="{{$autor->nombre}}">
                        <div class="card-body">
                        <h5 class="card-title">{{$autor->nombre}}  {{$autor->apellido}}</h5>
                        <a href="{{route('autores.show', $autor)}} " class="btn btn-primary">@lang('Ver más')</a>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>
    
@endsection