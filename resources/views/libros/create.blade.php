@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>@lang('Insertar libro')</h2>

        {{-- Cuando enviamos información se hace mediante POST --}}


        {{-- enctype="multipart/form-data" obligatorio para enviar archivos --}}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form method="POST" action="{{ route('libros.store') }}" enctype="multipart/form-data">
            
            @csrf

            {{-- Form de editar le ponen PUT, tambien acepta POST--}}
            @method('PUT')

            <div class="form-group">
                <label for="titulo">@lang("Título")</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="{{old('titulo')}}">
            </div>

            <div class="form-group">
                <label for="isbn">@lang("ISBN")</label>
                <input type="text" class="form-control" name="isbn" id="isbn" value="{{old('isbn')}}">
            </div>

            <div class="form-group">
                <label for="resumen">@lang("Resumen")</label>
                <textarea type="text" class="form-control" name="resumen" id="resumen" cols="20" rows="5" >{{old('resumen')}}</textarea>
            </div>
           
            <div class="custom-file mb-5">
                <input type="file" class="custom-file-input" name="portada" id="portada">
                <label class="custom-file-label" for="portada">@lang("Portada")</label>
              </div>

            <button type="submit" class="btn btn-primary">@lang("Insertar libro")</button>
        </form>
    </div>
        
@endsection