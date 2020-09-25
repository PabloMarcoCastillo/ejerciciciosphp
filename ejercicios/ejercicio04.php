<html>

<h1>Fibonacci</h1>

<?php

$n1=0;
$resultado=1;
$n2=15;
$miarray=array();

for ($i=1; $i<$n;$i++){

    $variable=$n1;

    $n1=$resultado + $n1;

    $resultado=$variable;

    $array[$i]=$resultado;

    for ($j=1; $j <$i ; $j++) { 
        print($array[$j].",");
    }

print("<br/>");
}

?>



</html>