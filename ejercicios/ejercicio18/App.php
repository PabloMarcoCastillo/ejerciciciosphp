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

    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
    } else {

      include('views/login.php');
    }
  }
  public function auth()
  {

    if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['password']) && !empty($_POST['password'])) {

      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {

      header('Location:?method=login');
    }

    setcookie("name", $name, time() + 7200);
    setcookie("password", $password, time() + 7200);


    header('Location: index.php?method=home');
  }

  public function home()
  {
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
    }

    include('views/home.php');
  }
  public function logout()
  {
    echo "Estamos en el logout<br>";
    setcookie("name", '', time() - 1);
    setcookie("password", '', time() - 1);
    header('Location: index.php?method=login');
  }
}
