<form method="POST" action="{{ $action }}" enctype="multipart/form-data">
            
    @csrf

    @method($method)

    <div class="form-group">
        <label for="nombre">@lang("Nombre")</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$autor !== null ? $autor['nombre'] : old('nombre')}}">
    </div>

    <div class="form-group">
        <label for="apellido">@lang("Apellido")</label>
        <input type="text" class="form-control" name="apellido" id="apellido" value="{{ $autor !== null ? $autor['apellido'] : old('apellido')}}">
    </div>

    <div class="form-group">
        <label for="biografia">@lang("Biografia")</label>
        <textarea type="text" class="form-control" name="biografia" id="biografia" cols="20" rows="5" >{{$autor !== null ? $autor['biografia'] : old('biografia')}}</textarea>
    </div>
   
    <div class="form-group">
        <label for="pais">@lang("País")</label>
        <input type="text" class="form-control" name="pais" id="pais" value="{{$autor !== null ? $autor['pais'] : old('pais')}}">
    </div>


    @if (Route::is('autores.edit'))
        <img src="{{ url($autor->avatar) }}" class="card-img-top" alt="Imagen de {{$autor->nombre}}">
    @endif

    <div class="custom-file my-3">
        <input type="file" class="custom-file-input" name="avatar" id="avatar">
        <label class="custom-file-label" for="avatar">@lang("Avatar")</label>
    </div>

    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
</form>