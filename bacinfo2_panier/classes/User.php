<?php


class User extends BaseEntity
{
    protected $id;
    protected $name;
    protected $passwd;

    public static $definition = array(
        'table' => 't_users',
        'primary' => 'id_user',
        'fields' => array(
            'id' => 'id_user',
            'name' => 'name_user',
            'passwd' => 'passwd_user'
        )
    );

    public static function connect($name, $passwd)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM `t_users` WHERE `name_user` = "'.$name.'" AND `passwd_user` = "'.$passwd.'"';
        $arr = $db->query($sql)->rowCount();
        var_dump($arr);
        if ($arr !== 0)
        {
            return true;
        }
        return false;
    }
}