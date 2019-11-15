<?php
/* Appel une procédure stockée avec un paramètre INOUT */
$couleur = 'rouge';
$base = new PDO('mysql:host=localhost; dbname=pdo',
 'root', '');
$sth = $base->prepare('CALL testin(:nom)');
$sth->bindParam(':nom', $couleur);
$sth->execute();
print("Après avoir pressé le fruit, la couleur est : $couleur");
?> 
