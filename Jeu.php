<?php


class Jeu
{
    private $randNb;
    private $maxTry;
    private $nbTry;
    private $message;
    private $statut;

    public function __construct($pMaxTry)
    {
        $this->randNb=mt_rand(1,100);
        $this->nbTry = 0;
        $this->maxTry = $pMaxTry;
        $this->statut = 'En cours';
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function compare($try)
    {
        $this->nbTry++;
        if ($try === $this->randNb) {
            $this->message = "Vous avez gagné!";
            $this->statut = "Win";
        } elseif ($this->nbTry === $this->maxTry)
        {
            $this->message = "Vous avez perdu";
            $this->statut = "Lose";
        } elseif ($try < $this->randNb)
        {
            $this->message = "Le nombre a trouver est plus grand que ".$try;
        } elseif ($try > $this->randNb)
        {
            $this->message = "Le nombre a trouver est plus petit que ".$try;
        } else {
            $this->message = "";
        }
        return $this->message;
    }
}