<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Genero extends Model
{

    use SoftDeletes;
    
    protected $fillable = [
        'nombre'
    ];

    public function libros()
    {
        return $this->belongsToMany('App\Libro', 'genero_libro', 'genero_id', 'libro_id')->withTimesstamps(); 
    }
}
