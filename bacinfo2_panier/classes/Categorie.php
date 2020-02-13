<?php
require_once('./classes/BaseEntity.php');
require_once('./classes/DB.php');

class Categorie extends BaseEntity
{
    protected $id_categ;
    protected $name_categ;

    public static $definition = array(
        'table' => 't_categories',
        'primary' => 'id_categ',
        'fields' => array(
            'id_categ' => 'id_categ',
            'id_name' => 'id_name'
        )
    );

    public static function getCategories()
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM t_categories';
        $st = $db->query($sql);
        return $st->fetch(PDO::FETCH_ASSOC);
    }

    public function getIdCateg()
    {
        return $this->id_categ;
    }

    public function getNameCateg()
    {
        return $this->name_categ;
    }

    public static function getDefinition()
    {
        return self::$definition;
    }

    public static function getFields()
    {
        return self::$definition['fields'];
    }

}