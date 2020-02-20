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
        Cart::addProducts($_POST['id'], $_POST['quantity']);
        return 2;
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'newProduct' => $this->addProduct()
        );
    }

}