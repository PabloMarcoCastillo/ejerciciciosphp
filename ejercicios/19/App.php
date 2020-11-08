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
            header('Location: ?method=home');
        }

        include('views/login.php');
    }
    public function auth()
    {

        if (isset($_POST["usuario"])) {
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];

        } else {

            header('Location: ?method=login');
        }

        setcookie("usuario", $usuario, time() + 3600);
        setcookie("contraseña", $contraseña, time() + 3600);
        header('Location: index.php?method=home');
    }
    public function home()
    {
        if (!isset($_COOKIE['usuario'])) {
            header('Location: ?method=login');
            return;
        }
        if (isset($_COOKIE['deseos'])) {
            $deseos = unserialize($_COOKIE['deseos']);
        } else {
            
            $deseos = [];
        }
        include('views/home.php');
    }
    public function new()
    {
        if (!isset($_POST['new'])) {
            header('Location: index.php?method=home');
            return;
        }
        $new = $_POST['new'];
        if (isset($_COOKIE['deseos'])) {
            $deseos = unserialize($_COOKIE['deseos']);
        } else {
            $deseos = [];
        }
        $deseos[] = $new;
        setcookie('deseos', serialize($deseos), time() + 60 * 60 * 2);
        header('Location: index.php?method=home');
    }

    public function delete()
    {
        
        if (isset($_COOKIE['deseos'])) {
            $deseos = unserialize($_COOKIE['deseos']);
        } else {
            $deseos = [];
        }
        $id = $_GET['id'];
        unset($deseos[$id]);
        setcookie('deseos', serialize($deseos), time() + 60 * 60 * 2);
        header('Location: index.php?method=home');
    }

    public function empty()
    {
        setcookie('deseos', '',  1);
        // setcookie('deseos', '', time() - 1);
        header('Location: index.php?method=home');
    }

    public function close()
    {
        setcookie('deseos', '',  1);
        setcookie('usuario', '',  1);
        setcookie('contraseña', '',  1);
        header('Location: index.php?method=login');
    }
}
