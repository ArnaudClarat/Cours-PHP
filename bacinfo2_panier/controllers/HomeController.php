<?php
require_once('./controllers/BaseController.php');
require_once('./classes/DB.php');
require_once('./classes/Product.php');

class HomeController extends BaseController
{
    function getDatas($nbr)
    {
        for ($i = 1; $i <= $nbr; $i++) {
            $products[] = new Product($i);
        }
        return $products;
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'products' => $this->getDatas(10)
        );
    }

    protected $name = 'Home';
}