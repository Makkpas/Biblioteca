@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>@lang('Editar genero')</h2>

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

        <x-genero-form
            method="PUT"
            action="{{route('generos.update', $genero)}}"
            btnText="{{__('Editar genero')}}"
            :genero="$genero"
        ></x-genero-form>
    </div>
        
@endsection