<html>

<head>
<link rel="stylesheet" href="views/colores.css">
</head>
<body class=" <?php echo $color; ?>"> 



        <h3>Elige un color</h3>

        <form action="?method=cambio" method="post">
            <p>Color de fondo:
                <select name="color">
                    <option>rojo</option>
                    <option>azul</option>
                </select></p>
                <input type="submit" value=" Enviar ">

        </form>
        </body>

</html>