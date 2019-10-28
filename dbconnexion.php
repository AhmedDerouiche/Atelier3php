<?php
try {
    $cnx =new PDO('mysql:host=localhost;dbname=dsi21_g2_2019','root','');
    $rep=$cnx->query ('SELECT * From student' );

   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }

   
?>