<html>

<head>
        
        <title>Ejercicio 10: Arrays asociativos</title>
</head>

<body>

<?php

$quintetobasket= array (

'base'=>'Corbalán',
'alero'=> 'Viriukov',
'pivot'=> 'Llorente',
'escolta'=> 'Sibilio',
'ala'=> 'Epi'

);

echo " Os presentamos el quinteto de salida " . "<br>";

foreach ($quintetobasket as $key => $value) {
    echo " $key " . " : ". " $value " . "<br>";
}


?>


</body>

</html>