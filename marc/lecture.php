<?php
$fp=fopen("test.txt", "r");
    while ($data = fgetcsv($fp, 0,"\n")) {
		
            $array=explode(";",$data[0]);
        }
    fclose($fp);
?>