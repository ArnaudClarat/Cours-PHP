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

    abstract function test(); //Fonction abstraite, donc class obligée d'être abstraite
}

class Femme extends Personne
{
    public function __construct($nom)
    {
        parent::__construct($nom);
    }

    public function test() //On est obligé d'override en public pour empecher de buger
    {
        echo "non abstrait";
    }
}

class Fille extends Femme
{

}

$per1 = new Femme("dada");
echo $per1->get_nom();
//$per1->prenom="amine"; Ne marche que si on commente la fonction __set() et les suivantes
var_dump($per1);