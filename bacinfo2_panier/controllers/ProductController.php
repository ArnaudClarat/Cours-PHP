<?php
require_once('./controllers/BaseController.php');
require_once('./classes/DB.php');
require_once('./classes/Product.php');

class ProductController extends BaseController
{
    public function getProduct($i)
    {
        return new Product($i);
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'product' => $this->getProduct(1), //$_POST['id']
        );
    }

    protected $name = 'product';
}