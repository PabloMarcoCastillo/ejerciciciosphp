<html>

<?php

$paises=["Eire", "España", "Francia", "Portugal"];

echo "<pre>";
var_dump($paises);
echo "</pre>";

foreach ($paises as $key => $value) {
    echo $value . '<br>';
}

?>


</html>