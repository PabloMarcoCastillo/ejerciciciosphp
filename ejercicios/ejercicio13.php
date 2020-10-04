<html>
<head>
<title>Ejercicio13</title>
</head>

<body>
<h6>Crea un formulario para enviar campo nombre. El nombre debe existir y debe tener un tamaño mínimo de 3 caracteres. <br>
Si es válido se da un saludo. Si no lo es se vuelve atras indicando que el campo es obligatorio y mostrando en el "input" el valor anterior no válido. </h6>
<form action="13action.php" method="post">
<label>Nombre</label><input type="text" name="nombre"><br>
<label>Enviar</label><input type="submit" value="enviar">
</form>

</body>
</html>