<html>

<?php

Class APP{

    public function __construct($name="APP"){
        echo "Bienvenidos a nuestra app";
    }

    public function fibonacci(){

    $n1=0;
    $n2=1;

    for ($i=0; $i<10;$i++){

    $resultado=$n1+$n2;
    echo "$resultado<br>";

    $n1=$n2;
    $n2=$resultado;
    }
    }

    public function potencias2(){

        $n=2;

        for ($potencia=0; $potencia <=24 ; $potencia++) { 
            echo pow($n,$potencia);
        }
    }

    public function factorial (){


    }

    public function primos(){


    }






}

?>


</html>