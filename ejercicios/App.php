<?php

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    echo "Construyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Rafael Cabeza";
    $this->student = "Fulano De Tal";
  }

  public function run()
  {
    if(isset($_GET['method'])){
      $method=$_GET['method'];

    }else {
      $method='index';
    }
    $this->$method();
  }

  public function index()
  {
    echo "Estamos en el index<br>";
    include('/ejercicios/views/index.php');
  }

  public function login()
  {
    echo "Estamos en el login<br>";
    include('/ejercicios/views/login.php');
  }  
}