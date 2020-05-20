<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    /*
    Arreglo para saber que campos se pueden llenar
    @var array
    */

    protected $fillable = [
        'titulo' ,
        'isbn',
        'resumen',
        'portada'
    ];
}
