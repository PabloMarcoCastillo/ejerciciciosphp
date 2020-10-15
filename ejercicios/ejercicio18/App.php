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
      $method = '';
    }
  
    $this->$method();      
  }
  public function index(){
  
    
    
    include('views/index.php');    
  }
 

  public function login(){
    echo "Estamos en el login<br>";
    include('views/login.php');    
    

  }
  public function auth(){
    echo "Estamos en el auth<br>";
    include('views/auth.php');   

}
public function home(){
  echo "Un saludo desde home<br>";
  include('views/home.php');   


}
public function logout(){
  echo "Estamos en el logout<br>";
  setcookie("login", serialize($login), time() + -1);
  include('views/logout.php');   

}
}

?>