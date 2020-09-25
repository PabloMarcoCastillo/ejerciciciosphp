<html>

<?php

$array1=[4, "hola", 3.5, "peio"];

echo "<pre>";
var_dump($array1);
echo "</pre>";

foreach ($array1 as $key => $value) {
    echo 'la clave' . $key . ' tiene el valor ' .$value . '<br>';
}

?>


</html>