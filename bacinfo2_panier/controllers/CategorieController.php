<?php
require_once('./controllers/BaseController.php');
require_once('./classes/DB.php');
require_once('./classes/Categorie.php');

class CategorieController
{

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'categories' => $this->getCategories()
        );
    }

    protected $name = 'categorie';
}