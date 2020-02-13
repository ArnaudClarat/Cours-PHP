<?php
require_once('./vendors/smarty/Smarty.class.php');
define("JS_DIR", "./views/js/");
define("CSS_DIR", "./views/css/");
class SmartyLoader extends Smarty
{

    public function __construct()
    {
        parent::__construct();
        $this->template_dir = './views/templates';
        $this->compile_dir = './views/templates_c';
        $this->config_dir = './views/configs/';
        $this->cache_dir = './views/cache/';
    }

    public function getHeader($assets = array("css" => array(), "js" => array()), $bootstrap = false, $title, $categories)
    {
        $assets['css'][]='./views/css/global.css';
        $this->assign(array(
            'title' => $title,
            'assets' => $assets,
            'bootstrap' => $bootstrap,
            'categories' => $categories,
        ));
        $this->display('header.tpl');
    }

    public function getFooter()
    {
        $this->assign(array(
        ));
        $this->display('footer.tpl');
    }
}