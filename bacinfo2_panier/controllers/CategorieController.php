<?php
require_once('./classes/Product.php');

class CategorieController extends BaseController
{
    protected $name = 'categorie';

    protected function getProducts($id)
    {
        return Product::getCategorie($id);
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'products'=> $this->getProducts($_GET['id']),
        );
    }
}