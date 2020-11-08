<html>
<head>
<title>Ejercicio 14</title>
</head>

<body>
<h5>Crea un formulario que funcione como calculadora.<br> 
Debe contener dos input como operandos y un select para elegir operador.<br>
Si se reciben los datos muestra el resultado.<br>
Si no son válidos o no existen debe devolver a la página anterior.<br>
</h5>

<form action="14action.php" method="post">
<label>Operando1</label><input type="text" name="operando1"><br>
<label>Operando2</label><input type="text" name="operando2"><br>

<label>Operadores</label><select name="operadores">
<option>Sumar</option>
<option>Restar</option>
<option>Multiplicar</option>
<option>Dividir</option>

</select><br>
<label>Enviar</label><input type="submit" value="enviar">



</form>



</body>



</html>