<?php

class ProductController extends BaseController
{
    public function getProduct($i)
    {
        return new Product($i);
    }

    public function getID()
    {
        return $_GET['id'];
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'product' => $this->getProduct($this->getID()),
        );
    }

    protected $name = 'product';
}