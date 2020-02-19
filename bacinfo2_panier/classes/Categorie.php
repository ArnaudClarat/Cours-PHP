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
            'name_categ' => 'name_categ'
        )
    );

    public static function getCategories()
    {
        $arr = BaseEntity::getEntities();
        foreach ($arr as $categ)
        {
            $categories[] = new self($categ['id_categ']);
        }
        return $categories;
    }

    public function getId()
    {
        return $this->id_categ;
    }

    public function getName()
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