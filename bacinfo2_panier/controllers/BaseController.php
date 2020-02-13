<?php

abstract class BaseController
{
    protected $name = 'base';
    protected $smarty;

    public function getCategories()
    {
        return Categorie::getCategories();
    }

    public function __construct()
    {
        $this->smarty = new SmartyLoader();
        $this->renderView();
    }

    protected function renderView()
    {
        $this->smarty->getHeader($this->getAssets(), true, $this->name, $this->getCategories());
        $this->smarty->assign($this->getTemplateVars());
        $this->smarty->display(strtolower($this->name).'.tpl');
        $this->smarty->getFooter();
    }

    protected function getAssets()
    {
        return $assets = array('css' => array(), 'js' => array());
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
        );
    }
}