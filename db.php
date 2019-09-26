<?php

$forename = 'Korenthin';
$name = 'Pierre';
$sex = 'M';
$phonenumber = '987654321';
$id = 1;

$base = new PDO('mysql:host=localhost; dbname=pdo', 'root', '');
$sql = $base->prepare("SELECT * FROM signals WHERE id = :id");
$sql = bindParam(id, $id);
// $sql->bindParam($forename, $name, $sex, $phonenumber);

$st = $base->query($sql);
$array = $st->fetchAll(PDO::FETCH_NUM);
var_dump($array)
?>