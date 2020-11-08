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
      $method = 'login';
    }

    $this->$method();
  }


  public function login()
  {

    if (isset($_COOKIE['usuario'])) {
      $usuario = $_COOKIE['usuario'];
      echo " ya hay una cookie : " . $usuario;
      include('views/home.php');
    } else {

      include('views/login.php');
    }
  }
  public function auth()
  {

    if (isset($_POST['usuario']) && isset($_POST['contraseña']) && !empty($_POST['usuario'])  && !empty($_POST['contraseña'])) {

      $usuario = $_POST['usuario'];
      $contraseña = $_POST['contraseña'];

      echo $usuario;

      setcookie('usuario', $usuario, time() +60*60);
      setcookie('contraseña', $contraseña, time() +60*60);
    
    } else {

      header('Location:?method=home');
    }
  }

  public function home()
  {

    include('views/home.php');
  }

  public function logout()
  {
    

    setcookie("usuario", '', time() - 1);
    setcookie("contraseña", '', time() - 1);

    header('Location: ?method=login');
  }
}
