<?php

class CategorieController extends BaseController
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