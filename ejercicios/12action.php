

<?php
if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
    
    echo " Hola $_POST[nombre] ";
    
}else{
    
        echo "Debe rellenar el campo nombre porque es obligatorio";

    
    
}
?>
