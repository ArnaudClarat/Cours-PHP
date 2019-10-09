<?php
	//Ma version, corrigée
    session_start();

    $prodparpage = 2;
    $pdo = new PDO('mysql:host=localhost;dbname=achat','root','');
    $totalenr = $pdo->prepare('SELECT COUNT(*) AS total FROM t_produits');
    $totalenr->execute();
    $max = $totalenr->rowCount();
    $nbpages = ceil($max/$prodparpage)-1;

    echo $nbpages;
    if (!isset($_SESSION['nbpage'])){
    	$_SESSION['nbpage']=0;
    }
    if ((isset($_POST['next'])) && ($_SESSION['nbpage']<$nbpages)){
    	$_SESSION['nbpage']++;
    }
    if ((isset($_POST['previous'])) && ($_SESSION['nbpage']!=0)){
    	$_SESSION['nbpage']--;
	}
    if (isset($_POST['last'])){
    	$_SESSION['nbpage']=$nbpages;
    }
    if (isset($_POST['first'])){
    	$_SESSION['nbpage']=0;
    }

    $sql='SELECT * FROM t_produits LIMIT '.$_SESSION['nbpage']*$prodparpage.','.$prodparpage.'';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>
 
<table>
<?php while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {?>
    <tr><form name="test" action="paginSelf.php" method="post">
    	<td><input type="hidden" name="id" value="<?php echo $row['id_prod']?>"></td>
    	<td><?php echo $row['nom_prod']?></td>
    	<td><?php echo $row['pu_prod']?></td>
		<td><?php echo $row['descriptif_prod']?></td>
    	<td><img width='150' src='photos/"<?php echo $row['photo_prod']?>"' />
    </form></tr>
<?php }?>
</table>
<form name="toto" action="paginSelf.php" method="post">
	<input type="submit" name="first" value="<<" />
	<input type="submit" name="previous" value="<" />
	<input type="submit" name="next" value=">" />
	<input type="submit" name="last" value=">>" />
</form>