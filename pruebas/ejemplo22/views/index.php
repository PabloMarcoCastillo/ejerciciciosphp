<?php
session_start();
?>

<html>
<head><title>Ejemplo21</title></head>

<body>
<h1>Sesiones</h1>

<?php echo ("Hola me llamo : "  . $_SESSION['name'] . "<br>");?>

<a href="?method=guardar1">guardar nombre</a><br>


<a href="?method=eliminarnombre">borrar nombre</a><br>

<a href="?method=guardar2">guardar colores</a><br>

<a href="?method=eliminarcolores">borrar colores</a>

<p>Volcado de la sesión</p>


<pre>
<?php

var_dump($_SESSION);
?>
</pre>
</body>




</html>