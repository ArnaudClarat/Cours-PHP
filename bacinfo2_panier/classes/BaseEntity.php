<?php
/**
 * Classe abstraite de base pour une entité
 *
 * Contient le __construct() et le getDatas()
 *
 */


abstract class BaseEntity
{
    /**
     * Contient le schémas de l'entité
     *
     * @var array
     */
    public static $definition;

    /**
     * Constructeur commun à toutes les entités
     * @param null $id de l'entité
     */
    public function __construct($id = null)
    {
        if ($id !== null)
        {
            $datas = $this->getDatas($id);
            foreach (static::$definition['fields'] as $field)
            {
                if (isset($datas[$field]))
                {
                    $this->{$field} = $datas[$field];
                }
            }
        }
    }

    /**
     *  Recupère les données dans la DB
     *
     * @param $id de l'entité
     * @return array => les données
     */
    public function getDatas($id)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM '.static::$definition['table'].' WHERE '.static::$definition['primary'].' = '.$id;
        $st = $db->query($sql);
        return $st->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Renvoie toutes les entités
     *
     * @return array => tous les objets
     */
    public static function getEntities()
    {
        $db = DB::getInstance();
        $st = $db->query('SELECT * FROM '.static::$definition['table']);
        $arr = $st->fetchAll(PDO::FETCH_ASSOC);
        return $arr;
    }
}