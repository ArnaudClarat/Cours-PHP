<?php

define("DB_DSN", "mysql:dbname=shoptest;host=localhost");
define("DB_USER", "root");
define("DB_PASS", "");

class DB
{

    private static $instance;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance(  ) {

        if(!self::$instance){
            self::$instance = new PDO('mysql:host=localhost;port=3308;dbname=bacinfo2_panier', 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$instance;
    }
}