<?php

// Nombre de la clase: DB
// Descripción: Esta clase representa una base de datos y tiene un método para guardar datos en ella.
class DB
{
    protected $name;

    public function __construct($nombre)
    {
        $this->name = $nombre;
        
    }


    public function guardar(){

        echo "Guardando en la Base de Datos... ".$this->name;
    }
    
}