<?php

 class Persona {

public $nombre;
public $apellido;
public $edad;
public $dni;

public function __construct($nombre,$apellido,$edad,$dni)
{

    $this ->nombre = $nombre;
    $this->apellidos=$apellido;
    $this->edad=$edad;
    $this->dni=$dni;
}

public function saludar()
{
    echo "hola a todos";
}

public function toString()
{
    return " mi nombre es : $this->nombre " . " tengo : $this->edad" ;
}
}

?>