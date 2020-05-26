<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    /*
    Arreglo para saber que campos se pueden llenar
    @var array
    */

    use SoftDeletes;

    protected $fillable = [
        'titulo' ,
        'isbn',
        'resumen',
        'portada',
        'user_id'
    ];

    public function autores()
    {
        return $this->belongsToMany('App\Autor');
    }

    public function generos()
    {
        return $this->belongsToMany('App\Genero');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
