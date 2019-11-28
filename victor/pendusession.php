<?php
include ('JeuPendu.php');
session_start();
if (!isset($_SESSION['gamesession']) || isset($_POST['retry'])){
    $_SESSION['messagetop'] = "Début du jeu !";
    $_SESSION['gamesession'] = new JeuPendu(7);
}
if (isset($_POST['letter'])){
    echo $_SESSION['gamesession']->askletter($_POST['letter']);
}


if ($_SESSION['gamesession']->getStatus() == 1) {

    for ($i = 0; $i < count($_SESSION['gamesession']->getArraygame()); $i++){
        echo " ".($_SESSION['gamesession']->getArraygame())[$i];
    }
    echo '<br>
        <form name="pendu" method="post" action="pendusession.php">';
    for ($i = 1; $i <= 26; $i++) {
        $letter = chr($i + 64);
        echo '<input type="submit" name="letter" value="' . $letter . '">';
    }
    echo "</form>";
}
elseif ($_SESSION['gamesession']->getStatus() == 2) {
    echo "YOU WON ! GG !
     <form name='pendu' method='post' action='pendusession.php'>
        <input type='submit' name='retry' value='Retry'>
     </form>";
}
else {
    echo "YOU LOST ! PA GG
     <form name='pendu' method='post' action='pendusession.php'>
        <input type='submit' name='retry' value='Retry'>
     </form>";

}

// $_SESSION['messagetop'] = "Jeu en cours...";