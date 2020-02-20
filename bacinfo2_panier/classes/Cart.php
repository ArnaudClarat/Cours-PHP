<?php


class Cart extends BaseEntity
{
    protected $id;
    protected $id_user;

    public static $definition = array(
        'table' => 't_carts',
        'primary' => 'id_cart',
        'fields' => array(
            'id' => 'id_cart',
            'id_user' => 'id_user',
        )
    );

    public static function addProducts($product, $nbr)
    {
        $db = DB::getInstance();
        $sql = 'INSERT into carts_products (id_cart, id_prod, quantity_prod) VALUE ('.$_SESSION['user']->getId().', '.$product.', '.$nbr.');';
            $db->exec($sql);
    }
}