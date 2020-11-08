<?php

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    session_start();

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


    if (($_SESSION['color'])) {

      $color = ($_SESSION['color']);
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
        $_POST['color']=$_SESSION['color'];
        

       
    header('Location: ?method=home');
  }
}
