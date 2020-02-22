<?php
require_once('./classes/Product.php');

class SearchController extends BaseController
{
    /**
     * @var string => Nom de la page
     */
    protected $name = 'search';

    /**
     * @return array|bool => Tableau de Produit|Erreur
     */
    protected function search()
    {
        $needle = ($_GET['stringSearch']);
        if (!isset($needle))
        {
            return false;
        }
        return Product::search($needle);
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
            'needle' => $_GET['stringSearch'],
            'products' => $this->search(),
        );
    }
}