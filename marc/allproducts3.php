<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
  <?php
  session_start();
  $nbenr=3;
  $bd=new PDO('mysql:host=localhost; dbname=achats', 'root', '');
  $sql="select * from t_produits"; 
  $stmt=$bd->query($sql);
  $rowcount=$stmt->rowcount();
  $maxpage=ceil($rowcount/$nbenr)-1;
  if (!isset($_SESSION['dep']))
  {
	  $_SESSION['page']=0;
  }
  if (isset($_POST['first']))
  {
	 $_SESSION['page']=0;
  }
  if (isset($_POST['suivant']))
  { 
	 $_SESSION['page']++;
	 echo $_SESSION['page'];
	 if ($_SESSION['page']>$maxpage)
	 {	 
	   echo $_SESSION['page'];
	   $_SESSION['page']=$maxpage;
	 }
  }
  if (isset($_POST['last']))
  {
	 $_SESSION['page']=$maxpage;
  }
  if (isset($_POST['precedent']))
  {
	 $_SESSION['page']--;
	 if ($_SESSION['page']<0)
	 {
		 $_SESSION['page']=0;
	 }
  }
  $bd=new PDO('mysql:host=localhost; dbname=achats', 'root', '');
  $sql="select * from t_produits limit ".$_SESSION['page']*$nbenr.",$nbenr";
  $stmt=$bd->query($sql);
  
  
  ?>
 
  <table>
  <?php
  while ($row= $stmt->fetch(PDO::FETCH_ASSOC))
  {?>
    <tr><td><?php echo $row['nom_prod']; ?></td><td>
	<?php echo $row['pu_prod']; ?></td><td>
	<?php echo $row['descriptif_prod']; ?></td><td>
	<img src='photos/<?php echo $row['photo_prod']; ?>'/></td></tr>	
  <?php } ?>
  <form name="f1" action="allproducts3.php" method="post">
    <input type="submit" name="first" value="<<"/> 
	<input type="submit" name="precedent" value="<"/> 
	<input type="submit" name="suivant" value=">"/> 
	<input type="submit" name="last" value=">>"/> 
  </form>	
   </table>
   </body>
</html> 
