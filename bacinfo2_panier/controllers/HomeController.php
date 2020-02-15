<?php
require_once('./classes/Product.php');

class HomeController extends BaseController
{

    public function getDatas($nbr)
    {
/*        $db = DB::getInstance();
        $st = $db->query('SELECT id_prod FROM t_products');
        $st->fetch();
        var_dump($st);*/
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

    protected $name = 'Home';
}