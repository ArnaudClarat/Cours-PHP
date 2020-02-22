<?php

class ProductController extends BaseController
{
    /**
     * @var string => Nom de la page
     */
    protected $name = 'product';

    /**
     * Renvoie le produit id
     *
     * @param $id
     * @return Product
     */
    public function getProduct($id)
    {
        return new Product($id);
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
            'product' => $this->getProduct($_GET['id']),
        );
    }
}