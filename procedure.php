<?php
$base = new PDO('mysql:host=localhost; dbname=pdo', 'root', '');
$nom = "Clarat";
$base->query("call (test, $nom)");
echo $nom;
?>