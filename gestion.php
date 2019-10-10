<?php
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=achat','root','');

    if(isset($_POST['delete1_x'])){
        $id = $_SESSION['id1'];
        $sql = 'DELETE FROM t_produits WHERE id_prod = ' . $id;
        $pdo->exec($sql);
    }
    elseif (isset($_POST['update1_x'])){
        $id = $_SESSION['id1'];
        $result = $pdo->query('SELECT * FROM t_produits WHERE id_prod = '.$id);
        var_dump($result);
    }