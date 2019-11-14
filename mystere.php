<?php
    include ("Jeu.php");
    session_start();
    if (!isset($_SESSION['jeu']))
    {
        $_SESSION['jeu'] = new Jeu(11);
    }
    if (isset($_POST['joue']))
    {
        echo $_SESSION['jeu']->compare($_POST['nb'].'<br/>');
    }
    if (isset($_POST['save']))
    {
        file_put_contents('mystere.txt', serialize($_SESSION['jeu']));
    }
    if (isset($_POST['reprendre']))
    {
        $_SESSION['jeu'] = unserialize(file_get_contents("mystere.txt"));
    }
?>

<form name="jeu" action="mystere.php" method="post">
    <label>Entre ton nombre :
        <input type="number" name="nb">
    </label>
    <input type="submit" name="joue" value="joue"/>
    <input type="submit" name="reprendre" value="reprendre"/>
    <input type="submit" name="sauver" value="sauver"/>
</form>
<div id="message">Début du jeu</div>
