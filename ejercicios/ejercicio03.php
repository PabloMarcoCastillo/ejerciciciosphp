<html>

<h1> Imprimir los números divisibles por 3 desde el 1 hasta el 10</h1>

<?php

const divisible=3;

for ($i=0; $i <=10 ; $i++) { 

    if ($i%divisible==0){
        echo ' el número ' . $i . ' es divisible de ' . divisible . '<br>';
    }
    else {
        echo ' el número ' . $i . ' no es divisible de ' . divisible . '<br>';
    }
}

?>

</html>