@extends('layouts.app')

@section('content')

    <div class="container">
        {{-- Para traducir estan 2 formas--}}
        {{-- <h2>{{__('Acá van a ir todo los libros')}}</h2> --}}
        <h2>@lang('Acá van a ir todo los libros')</h2>
    </div>
        
@endsection