<?php
require_once('./controllers/BaseController.php');
require_once('./classes/DB.php');

class HomeController extends BaseController
{
    function getDatas()
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM t_products';
        $st = $db->query($sql);
        return $st->fetchAll (PDO::FETCH_ASSOC);
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'datas' => $this->getDatas(),
        );
    }

    protected $name = 'Home';
}