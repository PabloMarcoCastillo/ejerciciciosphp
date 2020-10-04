<?php



if (isset($_POST["nombre"]) && strlen($_POST["nombre"])>2){

    echo " Hola $_POST[nombre]. Bienvenid@ ";

}else {
    echo "vuelve a introducir algo";
}
?>