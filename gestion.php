<?php
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=achat','root','');

    if(isset($_POST['delete1_x'])){
        $id = $_SESSION['id1'];
//TODO Finir ici
        echo $id;
        var_dump($id);
    }