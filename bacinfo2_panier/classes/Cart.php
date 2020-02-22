<?php


class Cart extends BaseEntity
{
    protected $id;
    protected $id_user;
    protected $arr = array();

    public static $definition = array(
        'table' => 't_carts',
        'primary' => 'id_cart',
        'fields' => array(
            'id' => 'id_cart',
            'id_user' => 'id_user',
        )
    );

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
            $this->arr[] = $produit;
        }
    }

    /**
     * @return array
     */
    public function getArr()
    {
        return $this->arr;
    }

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