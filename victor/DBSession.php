<?php
class DBSession {

    /**
     * DBSession constructor.
     */
    public function __construct(){}

    public function getrandomword()
    {
        $bd = new PDO('mysql:host=localhost; dbname=pendu', 'root', '');
        $sql = '
            SELECT Name 
            FROM `t_pendu` 
            ORDER BY RAND()
            LIMIT 1
            ';
        $stmt = $bd->prepare($sql);
        $stmt -> execute();
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        return $row['Name'];
    }
}