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
            foreach (static::$definition['fields'] as $var => $field)
            {
                if (isset($datas[$field]))
                {
                    $this->{$var} = $datas[$field];
                }
            }
        }
    }

    /**
     *  Recupère les données dans la DB
     *
     * @param int $id de l'entité
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
    public function getEntities()
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM '.static::$definition['table'];
        $st = $db->query($sql);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Recherche l'(les) entité(s) sur leur nom
     *
     * @param string $needle => String de recherche
     * @return array => Tableau associatif
     */
    public static function search($needle)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM '.static::$definition['table'].' WHERE '.static::$definition['fields']['name'].' like "%'.$needle.'%"';
        $st = $db->query($sql);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}