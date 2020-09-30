<html>

<h1>Fibonacci</h1>

<?php

$n1=0;
$n2=1;

for ($i=0; $i<10;$i++){

    $resultado=$n1+$n2;
    echo "$resultado<br>";

    $n1=$n2;
    $n2=$resultado;
    }




?>



</html>