<?php

class CartController extends BaseController
{
    /**
     * @var string => Nom de la page
     */
    protected $name = 'cart';

    /**
     * @return int
     * 0 = Connexion requise
     * 1 = Affichage de panier
     * 2 = Ajout du produit dans le panier
     * 3 = Erreur
     */
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
        return 3;
    }

    /**
     * Retourne le panier de l'utilisateur connecté
     *
     * @return Cart
     */
    protected function getPanier()
    {
        if (isset($_SESSION['user'])) {
            return new Cart($_SESSION['user']->getId());
        }
        return null;
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
            'newProduct' => $this->addProduct(),
            'panier' => $this->getPanier()
        );
    }

}