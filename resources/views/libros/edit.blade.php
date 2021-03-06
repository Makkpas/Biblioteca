@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>@lang('Editar libro')</h2>

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
            method="PUT" 
            action="{{ route('libros.update', $libro) }}"
            btnText="{{__('Editar libro')}}"
            :libro="$libro"

        ></x-libro-form> 



    </div>
        
@endsection