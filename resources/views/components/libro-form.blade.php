<form method="POST" action="{{$action}}" enctype="multipart/form-data">
            
    @csrf

    {{-- Form de editar le ponen PUT, tambien acepta POST--}}
    @method($method)

    <div class="form-group">
        <label for="titulo">@lang("Título")</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="{{$libro !== null ? $libro['titulo'] : old('titulo')}}">
    </div>

    <div class="form-group">
        <label for="isbn">@lang("ISBN")</label>
        <input type="text" class="form-control" name="isbn" id="isbn" value="{{$libro !== null ? $libro['isbn'] : old('isbn')}}">
    </div>

    <div class="form-group">
        <label for="resumen">@lang("Resumen")</label>
        <textarea type="text" class="form-control" name="resumen" id="resumen" cols="20" rows="5" >{{$libro !== null ? $libro['resumen'] : old('resumen')}}</textarea>
    </div>
   
    {{-- Nombre de la ruta --}}

    @if (Route::is('libros.edit'))
        <img src="{{ url($libro->portada) }}" class="card-img-top" alt="Imagen de {{$libro->titulo}}">
    @endif

    <div class="custom-file my-5">
        <input type="file" class="custom-file-input" name="portada" id="portada">
        <label class="custom-file-label" for="portada">@lang("Portada")</label>
      </div>

    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
</form>
