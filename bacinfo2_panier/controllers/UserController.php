<?php
require_once('./classes/User.php');

class UserController extends BaseController
{
    protected $name = 'user';

    protected function connect()
    {
        if (isset($_POST['submit']))
        {
            if (User::connect($_POST['pseudo'],$_POST['passwd']))
            {
                return true;
            }
        }
        return false;
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'user'=> $this->connect()
        );
    }
}