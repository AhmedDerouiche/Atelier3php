<?php

include 'dbconnexion.php';
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$ph=$_POST['phone'];


$cnx->exec("UPDATE student SET phone='$ph' WHERE firstname='$fn'"); 
echo 'Modifier avec succés';

?>