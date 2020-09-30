<html>

<?php

array(5){
     [0]=> 
     String (16)"North of Ireland"
     [1]=>
     String (6)"Wales"
     [2]=>
     String (8)"Scotland"
     [3]=>
     String (7)"England"
     [4]=>
     String (17) "Republic of Ireland"
}

echo "<pre>";
var_dump($paises);
echo "</pre>";

foreach ($paises as $key => $value) {
    echo $value . '<br>';
}

?>


</html>