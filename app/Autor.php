<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    // Campos con permiso de agregar informacion
    protected $fillable = [
        'nombre',
        'apellido',
        'biografia',
        'pais',
        'avatar'
    ];
}
