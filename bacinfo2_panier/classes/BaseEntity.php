<?php


abstract class BaseEntity
{
    public static $definition;

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

    public function getDatas($id)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM '.static::$definition['table'].' WHERE id_prod = '.$id;
        $st = $db->query($sql);
        return $st->fetch(PDO::FETCH_ASSOC);
    }
}