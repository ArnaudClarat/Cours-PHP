<?php
session_start();


$step = 2;
if (!isset($_SESSION['start']) || isset($_POST['first'])) {
	$_SESSION['start'] = 0;
}
elseif (isset($_POST['precedent'])) {
	$_SESSION['start'] =- $step;
	if ($_SESSION['start'] < 0) {
		$_SESSION['start'] = 0;
	}
}
elseif (isset($_POST['suivant'])) {
	$_SESSION['start'] =+ $step;
	if ($_SESSION['start'] > 8) {
		$_SESSION['start'] = 8;
	}
}
elseif (isset($_POST['last'])) {
	$_SESSION['start'] = 8;
}

$base = new PDO('mysql:host=localhost; dbname=achat', 'root'	, '');
$sql = "SELECT * FROM t_produits LIMIT ".$_SESSION['start'].",".$step;
$st = $base->query($sql);
if (!$st) {
	$_SESSION['start'] = 0;
	echo "Nombre 'start' trop grand!!";
}
$array = $st->fetchAll (PDO::FETCH_ASSOC);

echo $_SESSION['start'];
echo "<table>";
foreach ($array as $row) {
	echo "<tr>";
	foreach ($row as $key => $data) {
		echo "<td>";
		if($key == "photo_prod") {
			$img = "photo/".$data;
			echo "<img src='".$img."'>";
		}
		else { echo $data; }
		echo "</td>";
	}
	echo "</tr>";
}
/*
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) (
	echo "<tr><td>".$row['nom_prod']."</td><td>".$row['pu_prod']."€</td><td>".$row['descriptif_prod']."</td><td><img src='photos/".$row['photo_prod']."'></td></tr>";
)
*/
echo "</table>";

echo "<form name ='f1' action='tableau_prod.php' method = 'post'";
echo "<input type='submit' name='first' value='<<'>";
echo "<input type='submit' name='precedent' value='<'>";
echo "<input type='submit' name='suivant' value='>'>";
echo "<input type='submit' name='last' value='>>'>";
?>