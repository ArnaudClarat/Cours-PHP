<?php


class User extends BaseEntity
{
    /**
     * @var int $id
     * @var string $name
     * @var string $passwd
     */
    protected $id;
    protected $name;
    protected $passwd;

    /**
     * @var array => schéma d'un user
     */
    public static $definition = array(
        'table' => 't_users',
        'primary' => 'id_user',
        'fields' => array(
            'id' => 'id_user',
            'name' => 'name_user',
            'passwd' => 'passwd_user'
        )
    );

    /**
     * Verifie le couple pseudo/password
     *
     * @param $name => pseudo de l'utilisateur
     * @param $passwd => mot de passe de l'utilisateur
     * @return bool connection réussie
     */
    public static function connect($name, $passwd)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM `t_users` WHERE `name_user` = "'.$name.'" AND `passwd_user` = "'.$passwd.'"';
        $arr = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
        if (isset($arr['id_user']))
        {
            $_SESSION['user'] = new User($arr['id_user']);
            return true;
        }
        return false;
    }

    /**
     * Retourne l'id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}