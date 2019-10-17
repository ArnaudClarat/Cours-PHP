<?php
	//Ma version, corrigée
    session_start();

    $prodparpage = 2;
    $pdo = new PDO('mysql:host=localhost;dbname=achat','root','');
    $totalenr = $pdo->query('SELECT * FROM t_produits');
    $max = $totalenr->rowCount();
    $nbpages = ceil($max/$prodparpage)-1;

    if (!isset($_SESSION['nbpage']) || (isset($_POST['first_x']))){
    	$_SESSION['nbpage']=0;
    }
    if ((isset($_POST['next_x'])) && ($_SESSION['nbpage']<$nbpages)){
    	$_SESSION['nbpage']++;
    }
    if ((isset($_POST['previous_x'])) && ($_SESSION['nbpage']!==0)){
    	$_SESSION['nbpage']--;
	}
    if (isset($_POST['last_x'])) {
        $_SESSION['nbpage'] = $nbpages;
    }
    $sql = ('SELECT * FROM t_produits LIMIT '.$_SESSION['nbpage']*$prodparpage.', '.$prodparpage);
    $stmt = $pdo->query($sql);
    if (!$stmt) {
        $_SESSION['nbpage'] = 0;
        echo "<h1>Nombre 'nbpages' trop grand!!<br>Veuillez rechargez la page</h1>";
    }
?>
 
<table>
<?php while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {?>
    <form name="prod" action="gestion.php" method="post"><tr>
    	<td><input type="hidden" name="id" value="<?php echo $row['id_prod'];?>"></td>
    	<td><?php echo $row['nom_prod']?></td>
    	<td><?php echo $row['pu_prod']?></td>
        <td><img alt="product_image" src="photo/<?php echo $row['photo_prod']?>" width='150'/></td>
        <td><input type="image" name="delete" src="boutons/del.png" alt="delete"></td>
        <td><input type="image" name="update" src="boutons/modify.png" alt="update"></td>
        <td><input type="image" name="zoom" src="boutons/search.png" alt="search"></td>
    </tr></form>
<?php } ?>
</table>
<form name="nav" action="paginSelf.php" method="post">
    <?php if($_SESSION['nbpage'] > 1) {?>
	<input type="image" name="first" src="boutons/first.png" alt="first" />
    <?php } if ($_SESSION['nbpage'] !== 0) {?>
	<input type="image" name="previous" src="boutons/previous.png" alt="previous" />
    <?php } if ($_SESSION['nbpage'] !== $nbpages) {?>
	<input type="image" name="next" src="boutons/next.png" alt="next" />
    <?php } if ($_SESSION['nbpage'] > ($nbpages-1)) {?>
	<input type="image" name="last" src="boutons/last.png" alt="last" />
    <?php } ?>
</form>