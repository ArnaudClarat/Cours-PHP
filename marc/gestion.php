<?php
    $base = new PDO("mysql:host=localhost;dbname=achats", "root", "");
    if (isset ($_POST['ajout_x']))
	{?>
	  <form name="adding" action="gestion.php" method="post" enctype="multipart/form-data">
	  <input type="text" name="nom" value="" />
	  <input type="text" name="pu" value="" />
	  <input type="text" name="descr" value="" />
	  <input type="file" name="fichier" id="fichier" >
	  <input type="image" name="img"  id="img" />
	  <input type="image" name="add" src="photos/boutons/add.png" />
	  </form>
<?php    }
    if (isset ($_POST['add_x']))
	{
	  if (is_uploaded_file($_FILES['fichier']['tmp_name']))
	  {
		  move_uploaded_file($_FILES['fichier']['tmp_name'], "photos/".$_FILES['fichier']['name']);
		  $filename=$_FILES['fichier']['name'];
		  $nom=$_POST['nom'];
		  $pu=$_POST['pu'];
		  $descr=$_POST['descr'];
		  $sql="insert into t_produits (id_prod,nom_prod,pu_prod,descriptif_prod,photo_prod)
		  values(null,'$nom','$pu','$descr','$filename')";
		  $smtp=$base->prepare($sql);
		  $smtp->execute();
		  header ("location:pagin.php");
	  }
	}
		
	if (isset($_POST['delete_x']))
	{
	  $sql = "delete FROM t_produits where id_prod=".$_POST['id'];
	  $result=$base->prepare($sql);
      $result->execute();
      header("location:pagin.php"); 	  
	}
	
	if (isset($_POST['retour_x']))
	{
      header("location:pagin.php"); 	  
	}
	
	if (isset($_POST['view_x']))
	{
		$sql = "select * FROM t_produits where id_prod=".$_POST['id'];
	    $result=$base->query($sql);
		$columsfromdb=$result->fetch(PDO::FETCH_ASSOC);?>
		<table>
		<tr><form action="pagin.php" >
		<td><input type="hidden" name="id" value="<?php echo $columsfromdb['id_prod']?>"></td>
		<td><?php echo $columsfromdb['nom_prod']?></td>
		<td><?php echo $columsfromdb['pu_prod']?></td>
		<td><?php echo $columsfromdb['descriptif_prod']?></td>
		<td><img width='150' src='photos/<?php echo $columsfromdb['photo_prod']?>' />
		<input type="image" name="retour" src="photos/boutons/refresh.png" />
		</tr></form></table>
<?php	
	}
	if (isset($_POST['update_x']))
	
	{
      $sql = "select * FROM t_produits where id_prod=".$_POST['id'];
	  $result=$base->query($sql);
	  $_POST=$result->fetch(PDO::FETCH_ASSOC);?>
	  <table>
		<tr><form method="post" action="gestion.php" enctype="multipart/form-data" >
		<td><input type="hidden" name="id" value="<?php echo $_POST['id_prod']?>"></td>
		<td><input type="text" name="nom" value="<?php echo $_POST['nom_prod']?>"</td>
		<td><input type="text" name="pu" value="<?php echo $_POST['pu_prod']?>"</td>
		<td><input type="text" name="desc" value="<?php echo $_POST['descriptif_prod']?>"</td>
		<td><img width='150' src='photos/<?php echo $_POST['photo_prod']?>' /></td>
		<td><input type="file" name="fichier" /></td>
		<td><input type="image" name="update2" src="photos/boutons/modify.png" /></td>
		
		</tr></form></table> 
<?php		
	}
	if (isset($_POST['update2_x']))
	{
      $filename=""; 
	  if (is_uploaded_file($_FILES['fichier']['tmp_name']))
	  {
		  move_uploaded_file($_FILES['fichier']['tmp_name'], "photos/".$_FILES['fichier']['name']);
		  $filename=$_FILES['fichier']['name'];
	  }
	  if ($filename!="")
	  {
		 $sql = "update t_produits set nom_prod='".$_POST['nom']."' ,  pu_prod='".$_POST['pu']."' ,
	          descriptif_prod='".$_POST['desc']."' ,  photo_prod='".$filename."' where id_prod='".$_POST['id']."'" ;
	 	 $smtp=$base->prepare($sql);
		 $smtp->execute();
	  }
	  else
	  {
		 $sql = "update t_produits set nom_prod='".$_POST['nom']."' ,  pu_prod='".$_POST['pu']."' ,
	          descriptif_prod='".$_POST['desc']."' where id_prod='".$_POST['id']."'" ;
		 $smtp=$base->prepare($sql);
		 $smtp->execute();
	  }
      header ("location:pagin.php");
	}
?>