<?php
	
	class Pendu
	{
		private $motATrouver;
		public $affichage;
		private $nbTry;
		private $maxTry;
		public $lettresJouees;
		
		public function __construct($pmotATrouver, $pmaxTry)
		{
			$this->motATrouver = str_split($pmotATrouver);
			$this->lettresJouees = array();
			$this->nbTry = 0;
			for ($i = 0, $iMax = count($this->motATrouver); $i < $iMax; $i++) {
				$this->affichage[$i] = '_';
			}
		}
		public function verification($pLettre)
		{
			$test = false;
			if (!in_array($pLettre, $this->lettresJouees, true))
			{
				for ($i = 0, $iMax = count($this->motATrouver); $i < $iMax; $i++) {
					if ($this->motATrouver[$i] == $pLettre) {
						$this->affichage[$i] = $pLettre;
						$test = true;
					}
				}
				$this->lettresJouees[] = $pLettre;
			}
			if (!$test)
			{
				$this->nbTry++;
			}
			if ($this->motATrouver === $this->affichage)
			{
			
			}
		}
	}