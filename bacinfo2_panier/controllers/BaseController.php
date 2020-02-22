<?php

abstract class BaseController
{
    /**
     * @var string $name => Nom de la page
     * @var SmartyLoader $smarty
     */
    protected $name = 'base';
    protected $smarty;

    /**
     * retourne toutes les Categories
     *
     * @return array
     */
    public function getCategories()
    {
        return Categorie::getCategories();
    }

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        $this->smarty = new SmartyLoader();
        $this->renderView();
    }

    /**
     * Envoie la page
     *
     * @throws SmartyException
     */
    protected function renderView()
    {
        $this->smarty->getHeader($this->getAssets(), true, $this->name, $this->getCategories());
        $this->smarty->assign($this->getTemplateVars());
        $this->smarty->display(strtolower($this->name).'.tpl');
        $this->smarty->getFooter();
    }

    /**
     * Retourne les CSS et JS
     *
     * @return array
     */
    protected function getAssets()
    {
        return $assets = array('css' => array(), 'js' => array('./views/js/_bootstrap-input-spinner.js', './views/js/function.js'));
    }

    /**
     * Renvoie un tableau au template
     * chaque entrée est une variable dans le template
     *
     * @return array
     */
    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
        );
    }
}