<?php
require_once('./classes/BaseEntity.php');

class Product extends BaseEntity
{
    protected $table = 't_products';
    protected $datas;
    protected $definition = array(
        'id_prod' => 'id_prod',
        'name_prod' => 'name_prod',
        'shortDesc_prod' => 'shortDesc_prod',
        'longDesc_prod' => 'longDesc_prod',
        'price_prod' => 'price_prod',
        'stock_prod' => 'stock_prod'
    );


    public function __construct($id)
    {
        parent::__construct($id);
        foreach ($this->datas as $key => $value)
        {
            if (in_array($key, $this->definition, true))
            {
                $this->{$key} = $value;
            }
        }
    }

    static function getAllProducts()
    {

    }
}