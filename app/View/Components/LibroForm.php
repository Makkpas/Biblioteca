<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LibroForm extends Component
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
     * @var \App\Libro
     */
    public $libro;


    /**
     * 
     * 
     * @param string $method
     * @param string $action
     * @param string $btnText
     * @param App\Libro\ $libro
     */
    public function __construct($method, $action, $btnText, $libro)
    {
     
        $this->method = $method;
        $this->action = $action;
        $this->btnText = $btnText;
        $this->libro = $libro;
        

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.libro-form');
    }
}
