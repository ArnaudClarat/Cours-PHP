<?php
	$a = 'toto';
	$b = str_split($a);
	for ($i = 0, $iMax = count($b); $i < $iMax; $i++)
	{
		$c[$i] = '_';
	}
	
	$l = 't';
	for ($i = 0, $iMax = count($b); $i < $iMax; $i++)
	{
		if ($b[$i] === $l)
		{
			$c[$i] = $l;
		}
	}
	var_dump($c);