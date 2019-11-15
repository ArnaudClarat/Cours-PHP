<?php
 $a[]="pomme";
 $a[]="poire";
 $a[]="banane";
 $b=["pêche","noix"];
 $as=array ("nom"=>"jojo","prenom"=>"toto","age"=>"25");
 unset ($as['prenom']);
 unset ($a[1]);
 for ($i=0;$i<count($a);$i++)
 {
	 echo $a[$i];
 }
 
 var_dump($a);
 var_dump($b);
 foreach($a as $k=>$v)
 {
	 echo $k." ".$v."<br>";
 }
 foreach($as as $k=>$v)
 {
	 echo $k." ".$v."<br>";
 }
?>