<?php
	define('maxTry', 500000);
	define('min', 1);
	define('max', 1000000);
	$nbMystere = mt_rand(min, max);
	$i = 0;
	$test = null;
	$nb = 0;
	$min = min;
	$max = max;
	
	while ($test !== 0 && $i !== maxTry) {
		if ($test > 0) {
			$max = $nb;
		}
		if ($test < 0) {
			$min = $nb;
		}
		echo $min.'<br>';
		echo $max.'<br>';
		$nb = mt_rand($min, $max);
		echo $nb.'<br>';
		$test = find($nb, $nbMystere);
		echo $test.'<br><br>';
		$i++;
	}
	
	function find($try, $nbMystere) {
		if ($try > $nbMystere) {
			return 1;
		}
		if ($try < $nbMystere) {
			return -1;
		}
		return 0;
	}
	