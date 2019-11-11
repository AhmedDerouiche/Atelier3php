<?php
include 'dbconnexion.php';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$rep=$cnx->prepare("INSERT INTO student VALUES (null, :firstname , :lastname , :email , :phone)";

$rep->bindParam(':firstname',$firstname);
$rep->bindParam(':lastname',$lastname);
$rep->bindParam(':email',$email);
$rep->bindParam(':phone',$phone);

$rep->execute();

header('Location:ind.php');
?>