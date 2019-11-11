<?php
include 'dbconnexion.php';
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$id=$_POST['id'];

$rep=$cnx->prepare('UPDATE students SET firstname=:firstname , lastname=:lastname , email=:email , phone=:phone WHERE id=:id');

$rep->bindParam(':firstname',$firstname);
$rep->bindParam(':lastname',$lastname);
$rep->bindParam(':email',$email);
$rep->bindParam(':phone',$phone);
$rep->bindParam(':id',$id);
$rep->execute();
header('Location:ind.php');
?>