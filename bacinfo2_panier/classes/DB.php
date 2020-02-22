<?php

class DB
{
    /**
     * @var PDO Instance de connection
     */
    private static $instance;

    private function __construct() {}

    private function __clone() {}

    /**
     * @return PDO Instance de connection
     */
    public static function getInstance() {
        if(!self::$instance){
            self::$instance = new PDO('mysql:host=localhost;dbname=bacinfo2_panier', 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}