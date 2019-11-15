<?php
    session_start();
    $prodparpage = 2;
    $pdo = new PDO('mysql:host=localhost;dbname=achats','root','');
    $totalenr = $pdo->query('SELECT COUNT(*) AS total FROM t_produits');
    $max = $totalenr->fetch();
    $nbpages = ceil($max[0]/$prodparpage)-1;
    if (!isset($_SESSION['nbpage'])){$_SESSION['nbpage']=0; }
     
    if ((isset($_POST['next_x'])) && ($_SESSION['nbpage']<$nbpages))   {$_SESSION['nbpage']++;}
     
    if ((isset($_POST['previous_x'])) && ($_SESSION['nbpage']!=0))    {$_SESSION['nbpage']--;}
     
    if (isset($_POST['last_x']))      {$_SESSION['nbpage']=$nbpages;}
     
    if (isset($_POST['first_x']))     {$_SESSION['nbpage']=0; }
  
    $sql='SELECT * FROM t_produits LIMIT '.$_SESSION['nbpage']*$prodparpage.','.$prodparpage.'';
    $stmt = $pdo->query($sql);
?>
 
<table>
<?php while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {?>
    <tr><form name="test" action="gestion.php" method="post">
    <td><input type="hidden" name="id" value="<?php echo $row['id_prod']?>"></td>
    <td><?php echo $row['nom_prod']?></td>
    <td><?php echo $row['pu_prod']?></td>
    <td><?php echo $row['descriptif_prod']?></td>
    <td><img width='150' src='photos/<?php echo $row['photo_prod']?>' />
	<input type="image" name="delete" src="photos/boutons/del.png"   />
	<input type="image" name="update" src="photos/boutons/modify.png"   />
	<input type="image" name="view" src="photos/boutons/search.png"   />
    </form>
    </tr>
<?php }?>
</table>
<form name="toto" action="pagin.php" method="post">
<input type="image" name="first" src="photos\boutons\first.png" />
	<input type="image" name="previous" src="photos\boutons\previous.png" />
	<input type="image" name="next" src="photos\boutons\next.png" />
	<input type="image" name="last" src="photos\boutons\last.png" />
</form>

<form name="toto" action="gestion.php" method="post">
<input type="image" name="ajout" src="photos\boutons\add.png" />	
</form>



