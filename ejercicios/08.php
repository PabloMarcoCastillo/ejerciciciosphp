<html>

<?php


$quintetobasket[0]="Epi";
$quintetobasket[1]="Sibilio";
$quintetobasket[2]="Viriukov";
$quintetobasket[3]="Llorente";
$quintetobasket[4]="Corbalan";

$quintetobasketBis[0]="Navarro";
$$quintetobasketBis[1]="Gasol";
$$quintetobasketBis[2]="Rubio";
$$quintetobasketBis[3]="Llull";
$$quintetobasketBis[4]="Reyes";

?>

<body>

<ul>

<?php 
foreach ($quintetobasket as $value) {

    echo '  <li> ' .$value . '</li>';
}
?>
</ul>

<ul>

<?php 

foreach ($quintetobasketBis as $key => $value) {

    echo '  <li> ' .$key . ' : ' .$value . '</li>';
}

?>

</ul>


</body>


</html>