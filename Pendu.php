<?php
	
	class Pendu
	{
		private $motATrouver;
		private $affichage;
		private $nbTry;
		private $maxTry;
		private $lettreJouee;
		
		public function __construct($pmotATrouver, $pmaxTry)
		{
			$this->motATrouver = str_split($pmotATrouver);
			$this->lettreJouee = array();
			$this->nbTry = 0;
			for ($i = 0, $iMax = count($this->motATrouver); $i < $iMax; $i++) {
				$this->affichage[$i] = '_';
			}
		}
		public function verification($pLettre)
		{
			$test = false;
			if (!in_array($pLettre, $this->lettreJouee, true))
			{
				for ($i = 0, $iMax = count($this->motATrouver); $i < $iMax; $i++) {
					if ($this->motATrouver[$i] === $pLettre) {
						$this->affichage[$i] = $pLettre;
						$test = true;
					}
				}
				array_push($this->lettreJouee, $pLettre);
			}
			if (!$test)
			{
				$this->nbTry++;
			}
		}
	}
	
	$pendu = new Pendu("isabelle", 8);
	$pendu->verification("e");
	$pendu->verification("l");
	var_dump($pendu);