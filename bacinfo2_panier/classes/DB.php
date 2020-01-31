<?php

class DB
{

    private static $instance;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance(  ) {

        if(!self::$instance){
            self::$instance = new PDO('mysql:host=localhost;dbname=bacinfo2_panier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$instance;
    }
}