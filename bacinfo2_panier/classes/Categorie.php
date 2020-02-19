<?php
require_once('BaseEntity.php');
require_once('DB.php');

class Categorie extends BaseEntity
{
    protected $id;
    protected $name;

    public static $definition = array(
        'table' => 't_categories',
        'primary' => 'id_categ',
        'fields' => array(
            'id' => 'id_categ',
            'name' => 'name_categ'
        )
    );

    public static function getCategories()
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM '.static::$definition['table'];
        $st = $db->query($sql);
        $arr = $st->fetchAll(PDO::FETCH_ASSOC);
        foreach ($arr as $categ)
        {
            $categories[] = new self($categ['id_categ']);
        }
        return $categories;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
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