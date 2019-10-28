<?php
include 'dbconnexion.php';
$first=$_POST['firstname'];
$last=$_POST['lastname'];
$e=$_POST['email'];
$p=$_POST['phone'];
$cnx->exec("DELETE FROM students WHERE phone='$p' "); 
echo 'la suppression a été effectué';
?>