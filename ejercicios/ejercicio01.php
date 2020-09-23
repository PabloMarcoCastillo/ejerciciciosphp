<html>

<body>
<?php

$nombre="Pablo";
$apellido1="Marco";
$apellido2="Castillo";
$edad=42;
$nacionalidad="Española";


?>

<table>
    <tr>
        <th>Nombre</th>
        <td><?php echo "$nombre"?></td>
    </tr>
    <tr>
        <th>Apellidos</th>
        <td><?php echo "$apellido1  $apellido2"?></td>
    </tr>
    <tr>
        <th>Edad</th>
        <td><?php print "<em>$edad</em>"?></td>
    </tr>
    <tr>
        <th>Nacionalidad</th>
        <td><?php print "<em>$edad</em>"?></td>
    </tr>
</table> 
</body>

</html>