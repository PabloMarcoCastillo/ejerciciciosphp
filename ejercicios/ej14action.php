<?php


if ((isset($_POST["operando1"]) && ($_POST["operando2"]) && ($_POST["operadores"])) && (!empty($_POST["operando1"]) && ($_POST["operando2"]) && ($_POST["operadores"]))) {

$n1=$_POST["operando1"];
$n2=$_POST["operando2"];
$accion=$_POST["operadores"];

switch($accion){

        case "Sumar":
            echo Sumar($n1,$n2);
        break;

        case "Restar":
            echo Restar($n1,$n2);
        break;

        case "Multiplicar":
            echo Multiplicar($n1,$n2);
        break;

        case "Dividir":
            echo Dividir($n1,$n2);
        break;

    }
}
else {
    echo " es obligatorio rellenar los campos habilitados ";
}

function Sumar ($operando1, $operando2){

$suma=$operando1+$operando2;
return " la suma es : " . $suma;
}
function Restar ($operando1, $operando2){

$resta=$operando1-$operando2;
return " la resta es : " . $resta;
}

function Multiplicar ($operando1, $operando2){

$multiplicacion=$operando1*$operando2;
return " la multiplicación es : " . $multiplicacion;
}

function Dividir ($operando1, $operando2){

$division=$operando1/$operando2;
return " la división es : " . $division;
}





?>