<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Autor extends Model
{

    use SoftDeletes;
    // Campos con permiso de agregar informacion
    protected $fillable = [
        'nombre',
        'apellido',
        'biografia',
        'pais',
        'avatar'
    ];

    public function libros()
    {
        return $this->belongsToMany('App\Libro', 'autor_libro', 'autor_id', 'libro_id')->withTimesstamps();
    }
}
