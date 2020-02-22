<?php

class Categorie extends BaseEntity
{
    /**
     * @var $id => id de la catégorie
     * @var $name => nom de la catégorie
     */
    protected $id;
    protected $name;

    /**
     * @var array => schémas de l'entité
     */
    public static $definition = array(
        'table' => 't_categories',
        'primary' => 'id_categ',
        'fields' => array(
            'id' => 'id_categ',
            'name' => 'name_categ'
        )
    );

    /**
     * retourne toutes les Categories
     *
     * @return array
     */
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

    /**
     * @return int => id de la Categorie
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string => nom de la Categorie
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array => schémas de l'entité
     */
    public static function getDefinition()
    {
        return self::$definition;
    }

    /**
     * @return array => Ensemble des tables dans la DB
     */
    public static function getFields()
    {
        return self::$definition['fields'];
    }

}