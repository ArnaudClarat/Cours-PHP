<?php
class jeu
{
	private $nbalea;
	private $nbmaxcoups;
	private $nbcoups;
	private $message;
	private $statut;
	public function __construct($pnbmaxcoups)
	{
		$this->nbalea=rand(1,100);
		$this->nbcoups=0;
		$this->nbmaxcoups=$pnbmaxcoups;	
		$this->statut="en cours";
	}
	public function getmessage()
	{
		return $this->message;	
	}
	public function getstatut()
	{
		return $this->statut;	
	}
	public function compare($coup)
	{
		$this->nbcoups++;
		if ($coup==$this->nbalea)
		{
			$this->message="vous avez gagné";
			$this->statut="gagné";
		}
		else if($this->nbcoups==$this->nbmaxcoups)
		{
			 $this->message="vous avez perdu";
			 $this->statut="perdu";
		}
		else if ($coup<$this->nbalea)
		{
			$result=$this->nbmaxcoups-$this->nbcoups;
			$this->message="votre nombre ".$coup.
			" est trop petit il vous reste ".$result." coups";
		}
		else
		{
			$result=$this->nbmaxcoups-$this->nbcoups;
			$this->message="votre nombre ".$coup.
			" est trop grand il vous reste ".$result." coups";
		}
		return $this->message;
	}
}	
?>