<?php
    session_start();

    $pdo = new PDO('mysql:host=localhost;dbname=achat','root','');

    if(isset($_POST['delete_x'])){
        $pdo->exec('DELETE FROM t_produits WHERE id_prod = ' . $_POST['id']);
    }
    elseif (isset($_POST['update_x'])){
        $result = $pdo->query('SELECT * FROM t_produits WHERE id_prod = '.$_POST['id']);
        $array = $result->fetchAll(PDO::FETCH_ASSOC);
        $prod = $array[0];
        var_dump($prod); ?>
        
        <table>
        <form name="prodUpdate" action="gestion.php" method="post">
            <ul>
                <input type="hidden" name="id" value="<?php echo $prod['id_prod'];?>">
                <li><input type="text" name="nom" value="<?php echo $prod['nom_prod']?>"></li>
                <li><input type="text" name="pu" value="<?php echo $prod['pu_prod']?>"></li>
                <li><input type="text" name="desc" value="<?php echo $prod['descriptif_prod']?>"></li>
                <li><input type="text" name="photo" value="<?php echo $prod['photo_prod']?>"></li>
                <li><input type="image" name="refresh" src="boutons/refresh.png"></li>
            </ul>
        </form>
        </table>

        <?php }
    elseif (isset($_POST['zoom_x'])){
        $prod = $pdo->query('SELECT * FROM t_produits WHERE id_prod = '.$_POST['id'])?>
        <form name="prod" action="gestion.php" method="post"><tr>
    	    <td><input type="hidden" name="id1" value="<?php echo $prod['id_prod'];?>"></td>
    	    <td><?php echo $prod['nom_prod']?></td>
            <td><?php echo $prod['pu_prod']?></td>
            <td><img alt="product_image" src="photo/<?php echo $prod['photo_prod']?>" width='150'/></td>
            <td><input type="image" name="delete" src="boutons/del.png" alt="delete"></td>
            <td><input type="image" name="update" src="boutons/modify.png" alt="update"></td>
            <td><input type="image" name="zoom" src="boutons/search.png" alt="search"></td>
        </tr></form>
    <?php }
    
    elseif (isset($_POST['refresh_x'])){
        echo "refresh";
	    $sql = 'UPDATE t_produits SET nom_prod = ?, pu_prod = ?, descriptif_prod = ?, photo_prod = ? WHERE id_prod = ?';
	    $sth = $pdo->prepare($sql);
	    $test = $sth->execute(array($_POST['nom'], $_POST['pu'], $_POST['desc'], $_POST['photo'], $_POST['id']));
	    if ($test){
	        echo "Update validé";
        } else {
	        echo "Update non effectué";
        }
    }