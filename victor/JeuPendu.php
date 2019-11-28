<?php
include ('DBSession.php');
class JeuPendu
{
    public $wordtofind;
    public $arraygame;
    public $maxtries;
    public $tries;
    public $playedletters;
    public $status;

    /**
     * @return array
     */
    public function getWordtofind()
    {
        return $this->wordtofind;
    }

    /**
     * @param array $wordtofind
     */
    public function setWordtofind($wordtofind)
    {
        $this->wordtofind = $wordtofind;
    }

    /**
     * @return mixed
     */
    public function getArraygame()
    {
        return $this->arraygame;
    }

    /**
     * @param mixed $arraygame
     */
    public function setArraygame($arraygame)
    {
        $this->arraygame = $arraygame;
    }

    /**
     * @return mixed
     */
    public function getMaxtries()
    {
        return $this->maxtries;
    }

    /**
     * @param mixed $maxtries
     */
    public function setMaxtries($maxtries)
    {
        $this->maxtries = $maxtries;
    }

    /**
     * @return int
     */
    public function getTries()
    {
        return $this->tries;
    }

    /**
     * @param int $tries
     */
    public function setTries($tries)
    {
        $this->tries = $tries;
    }

    /**
     * @return array
     */
    public function getPlayedletters()
    {
        return $this->playedletters;
    }

    /**
     * @param array $playedletters
     */
    public function setPlayedletters($playedletters)
    {
        $this->playedletters = $playedletters;
    } // 1: Ongoing, 2 : Won, 3: Lost



    public function __construct($maxtries)
    {
        $db = new DBSession();
        $this->wordtofind = str_split($db->getrandomword());
        for ($i = 0;$i < count($this->wordtofind); $i++) $this->arraygame[$i] = "_";
        $this->maxtries = $maxtries;
        $this->tries = 0;
        $this->status = 1;
        $this->playedletters = array();
    }


    public function askletter($letter)
    {
        $message = "La lettre '".$letter."' n'est pas ou plus dans le mot.<br>";
        $wrong = true;
        $count = 0;
        if (in_array($letter, $this->playedletters)) {
        } else {
            array_push($this->playedletters, $letter);
            for ($i = 0; $i < count($this->wordtofind); $i++) {
                if ($this->wordtofind[$i] == $letter) {
                    $this->arraygame[$i] = $letter;
                    $wrong = false;
                    $count++;
                }
            }

        }
        if ($count !=0) {
            $message = "La lettre '".$letter."' est ".$count."x dans le mot.<br>";
        }
        if($wrong) $this->tries++;
        if ($this->wordtofind == $this->arraygame){
            $this->status = 2;
        }
        if ($this->maxtries == $this->tries){
            $this->status = 3;
        }
        return $message;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}
