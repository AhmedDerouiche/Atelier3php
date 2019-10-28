<?php
include 'dbconnexion.php';
$fn=$_POST['firstname'];
    $ln=$_POST['lastname'];
    $em=$_POST['email'];
    $ph=$_POST['phone'];
 

$cnx->exec("INSERT INTO student (firstname, lastname, email,phone)
VALUES ('$fn', '$ln', '$em' ,'$ph')");
echo ' ajouté';

?>
