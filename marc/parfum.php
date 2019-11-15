<?php
	session_start();
	$step = 2;
	$base = new PDO("mysql:host=localhost;dbname=achats", "root", "");
	$sql = "SELECT * FROM t_produits;"; 
	$result = $base->prepare($sql); 
	$result->execute(); 
	$max = $result->rowCount(); 
	$mod = $max%$step;
	
	if ( !isset($_SESSION['limiteInferieur']) || isset($_POST['first_x']) ){
		$_SESSION['limiteInferieur'] = 0;
	}
	
	if ( isset($_POST['previous_x']) && $_SESSION['limiteInferieur'] - $step >= 0){
		$_SESSION['limiteInferieur'] -= $step;
	}
	
	if ( isset($_POST['next_x']) && $_SESSION['limiteInferieur'] < $max-$step ){
		$_SESSION['limiteInferieur'] += $step;
	}
	
	if ( isset($_POST['last_x']) ){
		if ( $mod == 0 ){
			$_SESSION['limiteInferieur'] = $max - $step;
		}else{
			$_SESSION['limiteInferieur'] = $max - $mod;
		}
	}
	if ( isset($_POST['del_x'])){
		echo $_POST['id'];
	}
?>
<form action="parfum.php" method="post">
	<input type="image" name="first" src="photos\boutons\first.png" />
	<input type="image" name="previous" src="photos\boutons\previous.png" />
	<input type="image" name="next" src="photos\boutons\next.png" />
	<input type="image" name="last" src="photos\boutons\last.png" />
</form>

<?php
$sql = "SELECT * FROM t_produits LIMIT ".$_SESSION['limiteInferieur'].", $step;";
$st = $base->query($sql);
echo("<table>");
while ($row = $st->fetch(PDO::FETCH_ASSOC)){
	echo "<tr><form name='gg' action='parfum.php' method='post' >
	<td> <input type='hidden' name='id' value='".$row['id_prod']."'></td>
    <td> <input type='image' name='del' src='photos\boutons\del.png'></td>	
	<td>".$row['nom_prod']."</td>
	<td>".$row['pu_prod']."</td>
	<td>".$row['descriptif_prod']."</td>
	<td><img width='150' src='photos/".$row['photo_prod']."' /></td>
	
	</form></tr>";
}
echo("</table>");
?>