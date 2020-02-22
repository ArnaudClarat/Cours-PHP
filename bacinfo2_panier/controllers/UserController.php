<?php
require_once('./classes/User.php');

class UserController extends BaseController
{
    /**
     * @var string => Nom de la page
     */
    protected $name = 'user';

    /**
     * Tente de connecter l'utilisateur
     *
     * @return bool
     */
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
            'user'=> $this->connect()
        );
    }
}