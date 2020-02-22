<?php
require_once('./vendors/smarty/Smarty.class.php');
define('JS_DIR', './views/js/');
define('CSS_DIR', './views/css/');

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

    /**
     * Affiche le header
     *
     * @param array $assets => Ensemble des css et js
     * @param bool $bootstrap => Les librairies Bootstrap
     * @param string $title => Titre de la page
     * @param array $categories => Tableau de Categorie
     * @throws SmartyException
     */
    public function getHeader($assets = array('css' => array(), 'js' => array()), $bootstrap = false, $title = 'New page', $categories)
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

    /**
     * Affiche le footer
     *
     * @throws SmartyException
     */
    public function getFooter()
    {
        $this->assign(array(
        ));
        $this->display('footer.tpl');
    }
}