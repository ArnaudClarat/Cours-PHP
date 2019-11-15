<?php
//tableau en php
//$array[]="" le tableau est declaré implicitement tableau scalaire
//$array= array("nom"=>"jojo","prenom"=>"toto") tableau associatif;
$base = new PDO('mysql:host=localhost; dbname=pdo', 'root', '');
$sql="select * from `signals`";
$st=$base->query($sql);
while ($row=$st->fetch(PDO::FETCH_ASSOC))
{
 echo $row['nom'];	
}

?>
     