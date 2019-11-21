<?php
	include ('Pendu.php');
	session_start();
	
	if (!isset($_SESSION['pendu']))
	{
		$_SESSION['pendu'] = new Pendu('ISABELLE', 8);
	}
	if (isset($_POST['letter']))
	{
		echo $_POST['letter'];
		$_SESSION['pendu']->verification($_POST['letter']);
	}
	var_dump($_SESSION['pendu']);
?>
<div id="jeu"><?php echo implode($_SESSION['pendu']->affichage) ?></div><br>
<form name="pendu" method="post" action="vue.php">
	<?php
		for ($i = 65; $i < 91; $i++)
		{
			if(!in_array(chr($i), $_SESSION['pendu']->lettresJouees))
			{ ?>
				<input type="submit" name="letter" value="&#<?php echo $i ?>"/>
		<?php }
		}
	?>
</form>
