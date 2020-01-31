<?php


abstract class BaseEntity
{
    protected $table;
    protected $db;
    protected $datas;
    protected $definiton;

    public function __construct($id)
    {
        $this->datas = $this->getDatas($id);
    }

    public function getDatas($id)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM '.$this->table.' WHERE id_prod = '.$id;
        $st = $db->query($sql);
        return $st->fetch(PDO::FETCH_ASSOC);
    }
}