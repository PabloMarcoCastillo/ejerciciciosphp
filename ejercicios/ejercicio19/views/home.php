<html>

<head>

</head>

<?php
foreach ($color as $value) {
    if ($value == "Azul") {
?>

        <body id="azul">
        <?php
    }
    if ($value == "Rojo") {
        ?>

            <body id="rojo">
        <?php
    }
} ?>

        <h3>Elige un color</h3>

        <form action="?method=cambio" method="post">
            <p>Color de fondo:
                <select name="color">
                    <option>rojo</option>
                    <option>azul</option>
                </select></p>



        </form>

</html>