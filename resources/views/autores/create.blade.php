@extends('layouts.app');

@section('content')

    <div class="container">

        <h2>@lang('Insertar autor')</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('autores.store')}}" enctype="multipart/form-data">
            
            @csrf

            {{-- Form de editar le ponen PUT, tambien acepta POST--}}

            <div class="form-group">
                <label for="nombre">@lang("Nombre")</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}">
            </div>

            <div class="form-group">
                <label for="apellido">@lang("Apellido")</label>
                <input type="text" class="form-control" name="apellido" id="apellido" value="{{old('apellido')}}">
            </div>

            <div class="form-group">
                <label for="biografia">@lang("Biografia")</label>
                <textarea type="text" class="form-control" name="biografia" id="biografia" cols="20" rows="5" >{{old('biografia')}}</textarea>
            </div>
           
            <div class="form-group">
                <label for="pais">@lang("País")</label>
                <input type="text" class="form-control" name="pais" id="pais" value="{{old('pais')}}">
            </div>

            <div class="custom-file mb-5">
                <input type="file" class="custom-file-input" name="avatar" id="avatar">
                <label class="custom-file-label" for="avatar">@lang("Avatar")</label>
              </div>

            <button type="submit" class="btn btn-primary">@lang("Insertar libro")</button>
        </form>
    </div>
    
@endsection