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
            'needle' => $_GET['stringSearch'],
            'products' => $this->search(),
        );
    }
}