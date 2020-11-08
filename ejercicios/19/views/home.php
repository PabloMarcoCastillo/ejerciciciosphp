<html>

<head>
  <title>Home</title>
</head>

<body>
  <h1>Bienvenido <?= $_COOKIE['usuario'] ?></h1>

  <h2>Lista de deseos</h2>
  <h4><a href="?method=empty">Vaciar lista de deseos</a></h4>
  <h4><a href="?method=close">Cerrar sesión</a></h4>
  <ul>
    <pre>
  <?php
  
  if (count($deseos)) {
    foreach ($deseos as $id => $deseo) {
      echo "<li> Deseo nº $id: " . $deseo . ' <a href="?method=delete&id=' . $id . '"> borrar</a> </li>';
    }
  } else {
    echo "No hay deseos todavía";
  }
  ?>
  </ul>
  
  <hr>
  <h2>Alta de nuevos deseos</h2>
  <form action="?method=new" method="post">
    <label for="new">Nuevo deseo</label>
    <input type="text" name="new">
    
    <input type="submit" value="nuevo">
  </form>
  
</body>
</html>




</html>