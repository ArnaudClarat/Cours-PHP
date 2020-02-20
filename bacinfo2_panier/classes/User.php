<?php


class User extends BaseEntity
{
    protected $id;
    protected $name;
    protected $passwd;

    protected static $definition = array(
        'table' => 't_users',
        'primary' => 'id_user',
        'fields' => array(
            'id' => 'id_user',
            'name' => 'name_user',
            'passwd' => 'passwd_user'
        )
    );

    protected static function connect($name, $passwd)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM `t_users` WHERE name_user = '.$name;
        $arr = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
        var_dump($arr);
        $user = new self();

    }
}