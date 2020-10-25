<?php

session_start();

$colores=["rojo","azul"];


$_SESSION['colores']=$colores;
echo "GUARDADO";

header('Location: index.php');