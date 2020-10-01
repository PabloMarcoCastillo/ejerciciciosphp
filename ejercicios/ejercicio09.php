<html>
<head><title>Ejercicio 09</title></head>

<body>

<h1>Repitite el ejercicio 7 añadiendo los elementos al array de uno en uno. </h1>

<?php

$countries[]='North of Ireland';
$countries[2]='Wales';
$countries[1]='Scotland';
$countries[3]='England';
$countries[]='Republic of Ireland';


echo "<pre>";
var_dump($countries);
echo "</pre>";

foreach ($countries as $key => $value) {
    echo $value . '<br>';
}

?>

</body>
</html>