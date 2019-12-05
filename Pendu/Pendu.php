<?php
	include('DB_access.php');
	class Pendu
	{
		public $motATrouver;
		public $affichage;
		private $nbTry;
		private $maxTry;
		public $lettresJouees;
		private $pmotATrouver;
		public $statut;
		
		public function __construct($pmaxTry)
		{
			$db = new DB_access();
			$this->motATrouver = str_split($db->getRandomWord());
			$this->nbTry = 0;
			$this->statut = "En cours";
			$this->lettresJouees = array();
			$this->maxTry = $pmaxTry;
			for ($i = 0, $iMax = count($this->motATrouver); $i < $iMax; $i++) {
				$this->affichage[$i] = '_';
			}
		}
		
		public function verification($lettre)
		{
			$message = "La lettre '".$lettre."' n'est pas ou plus dans le mot.<br>";
			$test = false;
			if (!in_array($lettre, $this->lettresJouees, true))
			{
				for ($i = 0, $iMax = count($this->motATrouver); $i < $iMax; $i++) {
					if ($this->motATrouver[$i] === $lettre) {
						$this->affichage[$i] = $lettre;
						$test = true;
					}
				}
				$this->lettresJouees[] = $lettre;
			}
			if (!$test)
			{
				$this->nbTry++;
			}
		}
		
		public function getStatus()
		{
			if($this->motATrouver === $this->affichage)
			{
				$this->statut = 'Gagné';
			} elseif ($this->nbTry === $this->maxTry){
				$this->statut = 'Perdu';
			}
		}
	}