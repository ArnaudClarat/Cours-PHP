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

            <?php
            foreach ($prod as $key => $data) { ?>
                <tr>
                    <td><input type="text" name="id" value="<?php echo $data?>"></td>
                    <td><input type="image" name="check" src="boutons/refresh.png"></td>
                </tr>

            <?php } ?>

        </form>
        </table>

        <?php
    }
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