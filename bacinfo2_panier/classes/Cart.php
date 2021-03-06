<?php

class Cart extends BaseEntity
{
    /**
     * @var $id => id du panier
     * @var $id_user => id de l'user
     * @var array $products => ensemble des produits
     */
    protected $id;
    protected $id_user;
    protected $products = array();

    /**
     * @var array => schéma d'un panier
     */
    public static $definition = array(
        'table' => 't_carts',
        'primary' => 'id_cart',
        'fields' => array(
            'id' => 'id_cart',
            'id_user' => 'id_user',
        )
    );

    /**
     * Cart constructor.
     * @param null $id du panier
     */
    public function __construct($id = null)
    {
        parent::__construct($id);

        $db = DB::getInstance();
        $arr = $db
            ->query('SELECT * FROM `carts_products` WHERE id_cart = '.$id)
            ->fetchAll(PDO::FETCH_ASSOC);
        foreach ($arr as $product)
        {
            $produit = array();
            $produit[] = new Product($product['id_prod']);
            $produit[] = $product['quantity_prod'];
            $this->products[] = $produit;
        }
    }

    /**
     * @return array
     */
    public function getArr()
    {
        return $this->products;
    }

    /**
     * Ajoute le produit dans la DB
     *
     * @param $product => id du produit
     * @param $nbr => Quantité du produit
     * @return false|int => Erreur requete/nombre de ligne modifiée (Doit être égal à 1)
     */
    public static function addProducts($product, $nbr)
    {
        $db = DB::getInstance();
        $condition = ' WHERE `id_cart` = '.$_SESSION['user']->getId().' AND `id_prod` = '.$product;
        $arr = $db
            ->query('SELECT * FROM `carts_products`'.$condition)
            ->fetchAll(PDO::FETCH_ASSOC);
        $test = count($arr);
        if ($test === 0)
        {
            $sql = 'INSERT into carts_products (id_cart, id_prod, quantity_prod) VALUE ('.$_SESSION['user']->getId().', '.$product.', '.$nbr.');';
        } else
        {
            $newQuantity = $arr[0]['quantity_prod'] + $nbr;
            $sql = 'UPDATE `carts_products` SET `quantity_prod` = '.$newQuantity.$condition;
        }
        return $db->exec($sql);
    }
}