<html>

<?php

$cracks=["Messi", "Ronaldo", "Zidane", "Iniesta"];

$sobrevalorados=array("Neymar", "Morata", "Zlatan");

$promesas=[0=>'Halland', 1=>'Odegaard'];


?>

<ol>

<?php 
foreach ($cracks as $key => $value) {

    echo '  <li> ' .$value . '</li>';
}
?>
</ol>


<ul>

<?php 
foreach ($sobrevalorados as $key => $value) {

    echo '  <li> ' .$value . '</li>';
}
?>
</ul>

<ol>

<?php 
foreach ($promesas as $key => $value) {

    echo '  <li> ' .$value . '</li>';
}
?>
</ol>




</html>