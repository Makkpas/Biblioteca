@extends('layouts.app');

@section('content')

    <div class="container">
        <a href="{{route('autores.index')}} ">@lang('Autores')</a>

        <img src="{{ url($autor->avatar) }}" class="card-img-top mb-3" alt="{{$autor->nombre}}">

        <h2 class="card-title">{{$autor->nombre}}</h2>

        <p>{{$autor->biografia}}</p>
    </div>
    
@endsection