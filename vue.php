<?php
	include ('Pendu.php');
	session_start();
	$msg = '';
	
	if (!isset($_SESSION['pendu']))
	{
		$_SESSION['pendu'] = new Pendu( 8);
	}
	if (isset($_POST['letter']))
	{
		$_SESSION['pendu']->verification($_POST['letter']);
	}
	
	if ($_SESSION['pendu']->getStatus() === 'Gagné')
    {
	    $msg =  "YOU WON ! GG !
        <form name='pendu' method='post' action='vue.php'>
            <input type='submit' name='retry' value='Retry'>
        </form>";
    } elseif ($_SESSION['pendu']->getStatus() === 'Perdu')
    {
	    $msg = "YOU LOST ! PA GG
        <form name='pendu' method='post' action='vue.php'>
            <input type='submit' name='retry' value='Retry'>
        </form>";
    } else
    { ?>
        <div id="jeu"><?php echo implode($_SESSION['pendu']->affichage) ?></div><br>
        <form name="pendu" method="post" action="vue.php">
        <?php
            var_dump($_SESSION['pendu']->motATrouver);
	    for ($i = 65; $i < 91; $i++)
	    {
	        if(!in_array(chr($i), $_SESSION['pendu']->lettresJouees, true))
	        { ?>
                <input type="submit" name="letter" value="&#<?php echo $i ?>"/>
        <?php
            }
        }
    }
    echo '<br><br><h2>'.$msg.'</h2>';
	?>
    </form>
