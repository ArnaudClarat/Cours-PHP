<?php
require_once('./classes/Product.php');

class CategorieController extends BaseController
{
    /**
     * @var string => Nom de la page
     */
    protected $name = 'categorie';

    /**
     * Retourne l'ensemble des objets d'une catégorie
     *
     * @param $id => id de la Categorie
     * @return array => tableau de Produit
     */
    protected function getProducts($id)
    {
        return Product::getCategorie($id);
    }

    /**
     * Renvoie un tableau au template
     * chaque entrée est une variable dans le template
     *
     * @return array
     */
    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'products'=> $this->getProducts($_GET['id']),
        );
    }
}