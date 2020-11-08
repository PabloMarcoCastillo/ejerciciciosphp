<html>
<head>
<title>Ejercicio 16</title>
</head>

<body>

<h5>Crea un formulario que envíe un nombre. <br>
El action debe ser el mismo script. <br>
Muestra el nombre recibido en un input. <br>
Añade otro input vacío para un nuevo nombre. <br>
A cada pulsación, la lista de nombres debe ir creciendo. </h5>

<form action="">
  <label>Introduce un Nombre</label><input type="text" name="nombres[]"><br>
  <input type="submit" value="Enviar">  
  <hr>

  <?php
  if (isset($_GET['nombres'])) {
    foreach($_GET['nombres'] as $nombre) {
      echo '<input type="text" name="nombres[]" value="' . $nombre . '"><br>';
    }
  }
  ?>

</form>

</body>

</html>