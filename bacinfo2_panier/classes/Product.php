<?php
require_once('BaseEntity.php');

class Product extends BaseEntity
{
    /**
     * @var int $id
     * @var string $name
     * @var int $id_categ
     * @var string $shorDesc
     * @var string $longDesc
     * @var int price
     * @var int stock
     */
    protected $id;
    protected $name;
    protected $id_categ;
    protected $shortDesc;
    protected $longDesc;
    protected $price;
    protected $stock;

    /**
     * @var array => schéma d'un produit
     */
    public static $definition = array(
        'table' => 't_products',
        'primary' => 'id_prod',
        'fields' => array(
            'id' => 'id_prod',
            'name' => 'name_prod',
            'id_categ' => 'id_categ',
            'shortDesc' => 'shortDesc_prod',
            'longDesc' => 'longDesc_prod',
            'price' => 'price_prod',
            'stock' => 'stock_prod'
        )
    );

    /**
     * Crée des produits du resultat du parent
     *
     * @param string $needle => String de recherche
     * @return array => tableau de Produit
     */
    public static function search($needle)
    {
        $produits = array();
        $arr = parent::search($needle);
        foreach ($arr as $produit)
        {
            $produits[] = new self($produit['id_prod']);
        }
        return $produits;
    }

    /**
     * Retourne l'ensemble des objets d'une catégorie
     *
     * @param $id => id de la Categorie
     * @return array => tableau de Produit
     */
    public static function getCategorie($id)
    {
        $db = DB::getInstance();
        $sql = 'SELECT id_prod FROM t_products 
                    LEFT JOIN t_categories on t_products.id_categ = t_categories.id_categ
                    WHERE t_categories.id_categ = '.$id;
        $st = $db->query($sql);
        $arr = $st->fetchAll(PDO::FETCH_ASSOC);
        foreach ($arr as $pid)
        {
            $produits[] = new self($pid['id_prod']);
        }
        return $produits;
    }

    /**
     * Retourne tout les produits
     *
     * @return array => tableau de produit
     */
    public static function getAllProducts()
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM '.static::$definition['table'];
        $st = $db->query($sql);
        $arr = $st->fetchAll(PDO::FETCH_ASSOC);
        foreach ($arr as $prod)
        {
            $products[] = new self($prod['id_prod']);
        }
        return $products;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getIdCateg()
    {
        return $this->id_categ;
    }

    public function getShortDesc()
    {
        return $this->shortDesc;
    }

    public function getLongDesc()
    {
        return $this->longDesc;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->stock;
    }
}