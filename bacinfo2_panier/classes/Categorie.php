<?php
require_once('BaseEntity.php');
require_once('DB.php');

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
        $sql = 'SELECT `name_categ` FROM t_categories';
        return $db->query($sql);
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