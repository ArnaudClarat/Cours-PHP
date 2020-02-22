<?php

class CartController extends BaseController
{
    protected $name = 'cart';

    protected function addProduct()
    {
        if (!isset($_SESSION['user'])) {
            return 0;
        }
        if (!isset($_POST['submit'])) {
            return 1;
        }
        if (Cart::addProducts($_POST['id'], $_POST['quantity']) === 1)
        {
            return 2;
        }
        else {
            return 3;
        }
    }

    protected function getPanier()
    {
        return new Cart($_SESSION['user']->getId());
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'newProduct' => $this->addProduct(),
            'panier' => $this->getPanier()
        );
    }

}