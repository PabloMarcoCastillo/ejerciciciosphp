<?php
session_start();
?>

<html>
<head><title>Ejemplo21</title></head>

<body>
<h1>Sesiones</h1>

<?php echo ("Hola me llamo : "  . $_SESSION['name'] . "<br>");?>
<a href="guardar1.php">guardar nombre</a><br>


<a href="eliminarnombre.php">borrar nombre</a><br>

<a href="guardar2.php">guardar colores</a><br>

<a href="eliminarcolores.php">borrar colores</a>

<p>Volcado de la sesión</p>


<pre>
<?php

var_dump($_SESSION);
?>
</pre>
</body>




</html>