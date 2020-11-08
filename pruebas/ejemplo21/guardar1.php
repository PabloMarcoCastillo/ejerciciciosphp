<?php

session_start();

$name="Felipe";


$_SESSION['name']=$name;
echo "GUARDADO";


header('Location: index.php');