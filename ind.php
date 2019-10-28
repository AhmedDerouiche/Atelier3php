<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atelier3</title>
</head>
<body>
<table border="2">
    <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Phone</th>
   
    </tr>
<?php
require 'dbconnexion.php';
$rep=$cnx->query ('SELECT * From student' );
while($data = $rep->fetch()){
  
    echo '<tr>';
    echo '<td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo '</tr>';
}
?>
 </table>
</body>
</html>