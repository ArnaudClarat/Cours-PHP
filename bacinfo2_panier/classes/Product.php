<?php

class Product extends BaseEntity
{
    protected $id_prod;
    protected $name_prod;
    protected $shortDesc_prod;
    protected $longDesc_prod;
    protected $price_prod;
    protected $stock_prod;

    public static $definition = array(
        'table' => 't_products',
        'primary' => 'id_prod',
        'fields' => array(
            'id_prod' => 'id_prod',
            'name_prod' => 'name_prod',
            'shortDesc_prod' => 'shortDesc_prod',
            'longDesc_prod' => 'longDesc_prod',
            'price_prod' => 'price_prod',
            'stock_prod' => 'stock_prod'
        )
    );

    public function getId()
    {
        return $this->id_prod;
    }

    public function getName()
    {
        return $this->name_prod;
    }

    public function getShortDesc()
    {
        return $this->shortDesc_prod;
    }

    public function getLongDesc()
    {
        return $this->longDesc_prod;
    }

    public function getPrice()
    {
        return $this->price_prod;
    }

    public function getStock()
    {
        return $this->stock_prod;
    }

    public static function getDefinition()
    {
        return self::$definition;
    }


    /*
    public function __construct($id)
    {
        parent::__construct($id);
        foreach ($this->datas as $key => $value)
        {
            if (in_array($key, static::$definition, true))
            {
                $this->{$key} = $value;
            }
        }
    }
    */

    public static function getAllProducts()
    {
        // TODO
    }
}