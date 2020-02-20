<?php


class Cart extends BaseEntity
{
    protected $id;

    protected static $definition = array(
        'table' => 't_carts',
        'primary' => 'id_cart',
        'fields' => array(
            'id' => 'id_cart',
        )
    );
}