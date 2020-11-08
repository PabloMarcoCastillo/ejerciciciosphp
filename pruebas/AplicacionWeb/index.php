<html>
<header>
<title>Aplicación Web</title>
</header>

<body>

<?php

require_once "APP.php";
$app=new App;
$app->run();


?>


        <li><a href="?method=fibonacci"> fibonacci </a></li>
        <li><a href="?method=potencias2"> potencias2 </a></li>
        <li><a href="?method=factorial"> factorial </a></li>
        <li><a href="?method=primos"> primos </a></li>


</body>

</html>