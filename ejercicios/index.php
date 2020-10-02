<html>

<body>
  <?php
    require_once('App.php');
    $juan = new Persona('Juan', 'García', 15);

    echo $juan-> saludar();
    echo "<br>";
    echo "Soy $juan";
    echo "<br>";
    echo "Mi nombre completo es $juan->nombre $juan->apellido y tengo $juan->edad años";
  ?>
</body>

</html>