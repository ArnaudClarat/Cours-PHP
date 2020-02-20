<?php


class UserController extends BaseController
{
    protected $name = 'user';

    protected function connect()
    {
        if
        $_POST
        return User::connect();
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'user'=> $this->getProducts($_GET['id']),
        );
    }
}