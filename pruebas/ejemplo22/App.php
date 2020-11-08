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
            $method = 'index';
        }

        $this->$method();
    }
    public function index()
    {



        include('views/index.php');
    }

    public function guardar1()
    {

        session_start();

        $name = "Felipe";


        $_SESSION['name'] = $name;
        echo "GUARDADO";


        header('Location: index.php');
    }

    public function guardar2()
    {
        session_start();

        $colores = ["rojo", "azul"];


        $_SESSION['colores'] = $colores;
        echo "GUARDADO";

        header('Location: index.php');
    }

    public function eliminarnombre()
    {

        session_start();

        unset($_SESSION['name']);

        header('Location: index.php');
    }

    public function elimninarcolores()
    {

        session_start();

        unset($_SESSION['colores'][1]);

        header('Location: index.php');
    }
}
