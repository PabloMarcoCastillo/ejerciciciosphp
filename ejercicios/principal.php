<html>
<head>
<title>Instanciamos la clase persona</title>
</head>

<body>
<?php

require('persona.php');

$Pablo=new persona("Pablo","Marco",42,"44618089K");

echo $Pablo-> toString();

?>


</body>

</html>