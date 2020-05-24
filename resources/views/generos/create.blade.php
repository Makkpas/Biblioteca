@extends('layouts.app');

@section('content')

    <div class="container">

        <h2>@lang('Insertar genero')</h2>

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
            method="POST"
            action="{{route('generos.store')}}"
            btnText="{{__('Insertar genero')}}"
            :genero="null"
        ></x-genero-form>

    </div>
    
@endsection