<?php

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    // echo "Construyendo la app <hr>";

  }

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'home';
      
    }

    $this->$method();
  }

  public function home()
  {


    if (isset($_COOKIE['color'])) {

      $color = unserialize($_COOKIE['color']);
    } else {
      $color = array();
    }
    include('views/home.php');
  }


  public function colores()
  {
    echo "Estamos en colores<br>";

    



    include('views/colores.css');
  }

  public function cambio($color)
  {
    unset($_COOKIE['color']);
    setcookie('color','',time()-1);
    if($_POST['rojo']){
        $color[]=$_POST['rojo'];
        setcookie('color',serialize($color),time()+3600);
    }else if($_POST['azul']){
        $color[]=$_POST['azul'];
        setcookie('color',serialize($color),time()+3600);
    }
    
    header('Location: ?method=home');
  }
}
