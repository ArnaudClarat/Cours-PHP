<?php

// abstract = impossible d'instancier la classe, utile seulement pour l'héritage
abstract class Personne
{
   private $nom;

    public function __construct($nom)
    {
        $this->set_nom($nom);
    }
    public function set_nom($nom)
    {
        $this->nom = $nom;
    }

    public function get_nom()
    {
        return $this->nom;
    }

    public function __set($name, $value)
    {
        echo "attribut ".$name." inexistant";
    }

    public function __get($name)
    {
        echo "attribut ".$name." inexistant";
    }

    public function __isset($name)
    {
        echo "attribut ".$name." inexistant";
    }

    abstract function test();
}

class Femme extends Personne
{
    public function __construct($nom)
    {
        parent::__construct($nom);
    }

    public function test()
    {
        echo "non abstrait";
    }
}

class Fille extends Femme
{

}

$per1 = new Femme("dada");
echo $per1->get_nom();
$per1->prenom="amine"; // Ne marche que si on décommente la fonction __set()
var_dump($per1);