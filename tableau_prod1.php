<?php
session_start();
$base = new PDO('mysql:host=localhost; dbname=achat', 'root'	, '');
$first = 3;
$step = 3;
$sql = "SELECT * FROM t_produits LIMIT ".$first.",".$step;
$st = $base->query($sql);
$array = $st->fetchAll (PDO::FETCH_ASSOC);
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
echo "</table>";

echo "<input type=button onclick=window.location.href='tableau_prod.php'; value='<<'>";
