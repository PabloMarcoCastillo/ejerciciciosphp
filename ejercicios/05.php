<html>
<head>

<title>Mostrar la lista de todos los divisores</title>

</head>

<?php

const n1=193;

for ($i=1; $i <= n1; $i++) { 
    if (n1%$i==0) {
        $contador++;
        echo ' el número ' .$i . " es divisor de " . n1 . '<br>';
    }
    
}
if ($contador==2) {
    echo ' este número es primo';
}
else {
    echo ' este número no es primo';
}



?>




</html>