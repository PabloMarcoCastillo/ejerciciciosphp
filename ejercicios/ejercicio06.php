<html>
<?php 

$quintetobasket=["Epi","Sibilio","Viriukov","Llorente","Corbalan"];

?>
<body>

<ol>

<?php 
foreach ($quintetobasket as $key => $value) {

    echo '  <li> ' .$value . '</li>';
}
?>
</ol>

<ul>

<?php 
foreach ($quintetobasket as $key => $value) {

    echo '  <li> ' .$value . '</li>';
}
?>
</ul>


</body>


</html>