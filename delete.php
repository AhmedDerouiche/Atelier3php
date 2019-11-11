<?php
include 'dbconnexion.php';
$rep=$cnx->prepare("DELETE FROM student where id=:id");
$rep->bindParam(':id',$_GET['id']);
$rep->execute();
header('Location:ind.php');
?>