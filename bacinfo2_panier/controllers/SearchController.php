<?php
require_once('./classes/Product.php');

class SearchController extends BaseController
{

    public function search($needle)
    {
        $haystack = Product::getAllProducts();
        $key = array_search($needle, $haystack,false);
        var_dump($key);
    }

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
            'products' => $this->getDatas(10),
            'searchString' => $_GET['search']
        );
    }

    protected $name = 'Home';
}