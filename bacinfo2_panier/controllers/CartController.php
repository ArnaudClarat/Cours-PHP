<?php


class CartController
{
    protected $name = 'cart';

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'user'=> $this->getProducts($_GET['id']),
        );
    }

}