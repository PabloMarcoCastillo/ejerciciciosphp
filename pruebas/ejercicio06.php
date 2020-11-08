<html>
<?php 

$quintetobasket=["Epi","Sibilio","Viriukov","Llorente","Corbalan"];
$quintetobasketBis=array(01=>'Navarro',02=>'Gasol',03=>'Rubio',04=>'Llull',05=>'Reyes');

?>
<body>

<ul>

<?php 
foreach ($quintetobasket as $value) {

    echo '  <li> ' .$value . '</li>';
}
?>
</ul>

<ul>

<?php 

foreach ($quintetobasketBis as $key => $value) {

    echo '  <li> ' .$key . ' : ' .$value . '</li>';
}
?>
</ul>


</body>


</html>