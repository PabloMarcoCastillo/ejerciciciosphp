<html>
<head>
<title>Ejercicio15</title>
</head>
<body>
<h5>Crea un formulario que envíe un array de 3 nombres. <br>
Para hacerlo debes usar el mismo nombre en todos los input (name="nombres[]"). </h5>
</body>

<?php
$nombres=["Pedro","Julio","Ander"];
?>



<form action="" method="get">
<label>Nombre1</label><input type="checkbox" name="nombres[]" id="nombre 1" value="Pepe"><br>
<label>Nombre2</label><input type="checkbox" name="nombres[]" id="nombre 2" value="Jose"><br>
<label>Nombre3</label><input type="checkbox" name="nombres[]" id="nombre 3" value="Pep"><br>
<input type="submit" value="enviar">

</form>






</html>