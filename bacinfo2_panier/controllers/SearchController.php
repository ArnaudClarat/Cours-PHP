<?php
require_once('./classes/Product.php');

class SearchController extends BaseController
{
    protected $name = 'search';

    protected function search()
    {
        $needle = ($_GET['stringSearch']);
        if (!isset($needle))
        {
            return false;
        }
        return Product::search($needle);
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'products' => $this->search(),
        );
    }








    /*
    public function search()
    {
        $needle = ($_GET['stringSearch']);
        if (!isset($needle))
        {
            return false;
        }

        $pattern = ''.$needle.'';
        $haystack = Product::getAllProducts();
        foreach ($haystack as $product) {
            if (preg_match($pattern, $needle) ? true : false)
            {
                $products[] = $product;
            } else
            {
                echo $needle.' - '.$product->getName().'<br>';
            }
        }
        var_dump($products);
        return $products;

    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'products' => $this->search()
        );
    }

    protected $name = 'Search';
    */
}