<?php


class Jeu
{
    private $randNb;
    private $maxTry;
    private $nbTry;
    private $message;

    public function __construct($pMaxTry)
    {
        $this->randNb=mt_rand(1,100);
        $this->nbTry = 0;
        $this->maxTry = $pMaxTry;
    }

    public function compare($try)
    {
        $this->nbTry++;
        if ($try == $this->randNb) {
            $this->message = "Vous avez gagné!";
        } elseif ($this->nbTry == $this->maxTry)
        {
            $this->message = "Vous avez perdu";
        } elseif ($try < $this->randNb)
        {
            $this->message = "Le nombre a trouver est plus grand que ".$try;
        } else
        {
            $this->message = "Le nombre a trouver est plus petit que ".$try;
        }
        return $this->message;
    }
}
$test = new Jeu(10);
echo $test->compare(10);