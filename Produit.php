<?php

class Produit
{
     private $id;
     private $nom;
     private $pu;
     private $descriptif;
     private $photo;

     public function __construct($donnees)
     {
         foreach ($donnees as $key=>$donnee) {
             $method = "set".ucfirst(strtok($key, "_"));
             if (method_exists($this,$method)) {
                 $this->$method($donnee);
             }
         }
     }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPu($pu)
    {
        $this->pu = $pu;
    }

    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
}

$donnees = ["id_prod"=>"i", "nom_prod"=>"jjjjj", "pu_prod"=>"25", "descriptif_prod"=>"jdlhshkbvkjsjbk", "photo_prod"=>"kdjbf"];
$prod = new Produit($donnees);
var_dump($prod);
file_put_contents("produits.txt",serialize($prod));