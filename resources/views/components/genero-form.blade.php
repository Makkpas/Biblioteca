<form method="POST" action="{{$action}}" enctype="multipart/form-data">
            
    @csrf

   
    @method($method)

    <div class="form-group">
        <label for="nombre">@lang("Nombre")</label>
        <input type="text" class="form-control" name="nombre" id="nombre    " value="{{$genero !== null ? $genero['nombre'] : old('nombre')}}">
    </div>

    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
</form>
