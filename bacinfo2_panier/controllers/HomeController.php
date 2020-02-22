<?php
require_once('./classes/Product.php');

class HomeController extends BaseController
{
    /**
     * @var string => Nom de la page
     */
    protected $name = 'Home';

    /**
     * @param $nbr => nombre de produit à générer
     * @return array => tableau de Produit
     */
    public function getDatas($nbr)
    {
        for ($i = 11; $i <= $nbr+10; $i++) {
            $products[] = new Product($i);
        }
        return $products;
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
            'products' => $this->getDatas(10)
        );
    }
}