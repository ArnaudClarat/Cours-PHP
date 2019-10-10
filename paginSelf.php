<?php
	//Ma version, corrigée
    session_start();

    $prodparpage = 2;
    $pdo = new PDO('mysql:host=localhost;dbname=achat','root','');
    $totalenr = $pdo->query('SELECT COUNT(*) AS total FROM t_produits');
    $max = $totalenr->rowCount();
    $nbpages = ceil($max/$prodparpage)-1;

    if (!isset($_SESSION['nbpage'])){
    	$_SESSION['nbpage']=0;
    }
    if ((isset($_POST['next'])) && ($_SESSION['nbpage']<$nbpages)){
    	$_SESSION['nbpage']++;
    }
    if ((isset($_POST['previous'])) && ($_SESSION['nbpage']!==0)){
    	$_SESSION['nbpage']--;
	}
    if (isset($_POST['last'])){
    	$_SESSION['nbpage']=$nbpages;
    }
    if (isset($_POST['first'])){
    	$_SESSION['nbpage']=0;
    }

    $sql='SELECT * FROM t_produits LIMIT '.$_SESSION['nbpage']*$prodparpage.','.$prodparpage.'';
    $stmt = $pdo->query($sql);
?>
 
<table>
<?php while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {?>
    <tr><form name="test" action="paginSelf.php" method="post">
    	<td><input type="hidden" name="id" value="<?php echo $row['id_prod']?>"></td>
    	<td><?php echo $row['nom_prod']?></td>
    	<td><?php echo $row['pu_prod']?></td>
		<td><?php echo $row['descriptif_prod']?></td>
        <td><img alt="product_image" src="photo/<?php echo $row['photo_prod']?>" width='150'/></td
    </form></tr>
<?php }?>
</table>
<form name="toto" action="paginSelf.php" method="post">
	<input type="image" name="first" src="boutons/first.png" alt="first" />
	<input type="image" name="previous" src="boutons/previous.png" alt="previous" />
	<input type="image" name="next" src="boutons/next.png" alt="next" />
	<input type="image" name="last" src="boutons/last.png" alt="last" />
</form>