<html>

<head>
    <title>Ejercicio15</title>
</head>

<body>
    <h5>Crea un formulario que envíe un array de 3 nombres. <br>
        Para hacerlo debes usar el mismo nombre en todos los input (name="nombres[]"). </h5>
</body>

<?php
$nombres = ["Pedro", "Julio", "Ander"];
?>



<form action="" method="get">
    <label>Nombre</label><input type="text" name="nombres[]" value=""><br>
    <label>Nombre</label><input type="text" name="nombres[]" value=""><br>
    <label>Nombre</label><input type="text" name="nombres[]" value=""><br>

    <input type="submit" value="enviar"><br>


    <?php var_dump('nombres[]'); ?><br>

    <?php
  if (isset($_GET['nombres'])) {

      
    foreach($_GET['nombres'] as $key => $nombre) {
      echo "$key" . "$nombre" . '<br>';
    }
  }
  ?>
  </form>


</html>