<?php
    session_start();

    $base = new PDO('mysql:host=localhost; dbname=achat', 'root'	, '');
    $sql1 = 'SELECT * FROM t_produits';
    $result = $base->query($sql1);
$max = $result->rowCount();
    $step = 2;

    if (!isset($_SESSION['start']) || isset($_POST['first'])) {
        $_SESSION['start'] = 0;
    }
    elseif (isset($_POST['precedent'])) {
        $_SESSION['start'] -= $step;
        if ($_SESSION['start'] < 0) {
            $_SESSION['start'] = 0;
        }
    }
    elseif (isset($_POST['suivant'])) {
        $_SESSION['start'] += $step;
        if ($_SESSION['start'] > $max - $step) {
            $_SESSION['start'] = $max - $step;
        }
    }
    elseif (isset($_POST['last'])) {
        $mod = $max % $step;
        if ($mod === 0) {
            $_SESSION['start'] = $max -$step;
        }
        else{
            $_SESSION['start'] = $max - $mod;
        }
    }

    $sql2 = 'SELECT * FROM t_produits LIMIT ' .$_SESSION['start']. ',' .$step;
    $stmt = $base->query($sql2);
    if (!$stmt) {
        $_SESSION['start'] = 0;
        echo "<h1>Nombre 'start' trop grand!!<br>Veuillez rechargez la page</h1>";
    }

    echo '<table>';

    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($array as $row) {
        echo '<tr>';
        foreach ($row as $key => $data) {
            echo '<td>';
            if($key === 'photo_prod') {
                $img = 'photo/' .$data;
                echo "<img src='".$img."'>";
            }
            elseif ($key === 'pu_prod') { echo $data. ' €'; }
            else { echo $data; }
            echo '</td>';
        }
        echo '</tr>';
    }

    /*
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>".$row['nom_prod']."</td><td>".$row['pu_prod']."€</td><td>".$row['descriptif_prod']."</td><td><img src='photos/".$row['photo_prod']."'></td></tr>";
    }
    */

    echo '</table>';

    echo "<form name ='f1' action='tableau_prod.php' method = 'post'>";
    if($_SESSION['start'] > 3) {
        echo "<input type='submit' name='first' value='<<'>";
    }
    if($_SESSION['start'] !== 0) {
        echo "<input type='submit' name='precedent' value='<'>";
    }
    if($_SESSION['start'] < 8) {
        echo "<input type='submit' name='suivant' value='>'>";
    }
    if($_SESSION['start'] < 6) {
        echo "<input type='submit' name='last' value='>>'>";
    }
