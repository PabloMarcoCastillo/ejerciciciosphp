<?php
if (isset($_POST["login"]) && !empty($_POST["login"]) && ($_POST["login"]) && !empty($_POST["login"])) {
    
    setcookie("login", serialize($login), time() + 3600);
    setcookie("password", json_encode($password), time() + 3600);
    
}else{
    
        echo "Debe rellenar los campos porque son obligatorios";
 
    
}
header('Location: index.php?method=home');
?>