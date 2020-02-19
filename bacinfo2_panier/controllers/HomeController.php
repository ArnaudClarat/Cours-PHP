<?php
require_once('./classes/Product.php');

class HomeController extends BaseController
{
    protected $name = 'Home';

    public function getDatas($nbr)
    {
        for ($i = 11; $i <= $nbr+10; $i++) {
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
}