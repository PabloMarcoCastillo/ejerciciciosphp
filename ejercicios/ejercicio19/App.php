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

      $color = ($_COOKIE['color']);
    } 
    else{
      $color="";
    }
    include('views/home.php');
  }


  public function colores()
  {
    echo "Estamos en colores<br>";

    include('views/colores.css');
  }

  public function cambio()
  {
    
    /*var_dump ($_POST);
    exit();*/

    

        $color=$_POST['color'];

        setcookie('color',$color,time()+3600);

       
    header('Location: ?method=home');
  }
}
