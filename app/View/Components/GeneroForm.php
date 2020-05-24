<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GeneroForm extends Component
{
    /**
     * Metodo por el que ennvia el form
     *
     * @var string
     */
    public $method;

    /**
    * Accion a realizar
    *
    * @return string
    */
   public $action;

    /**
    * Texto del boton
    *
    * @return string
    */
   public $btnText;

   /**
    * 
    * Libro
    * 
    * @var \App\Genero
    */
   public $genero;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method, $action, $btnText, $genero)
    {
        $this->method = $method;
        $this->action = $action;
        $this->btnText = $btnText;
        $this->genero = $genero;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.genero-form');
    }
}
