<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
<?php
  $bd=new PDO('mysql:host=localhost; dbname=achats', 'root', '');
  $sql="select * from t_produits";
  $stmt=$bd->query($sql);
  echo "<table>";
  while ($row= $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo "<tr><td>".$row['nom_prod'].
	"</td><td>".$row['pu_prod']."</td><td>".
	"</td><td>".$row['descriptif_prod']."</td><td>".
	"</td><td><img src='photos/".$row['photo_prod']."'/></td></tr>";
  }
   echo "</table>";  
?>
	</body>
</html>