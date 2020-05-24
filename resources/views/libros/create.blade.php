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

        <x-libro-form 
            method="POST" 
            action="{{ route('libros.store') }}" 
            btnText="{{__('Insertar libro')}}"
            :libro="null"

        ></x-libro-form> 
    </div>
        
@endsection