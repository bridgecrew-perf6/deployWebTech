<?php

class Db
{
    private $host = 'db4free.net';
    private $user = 'webproject_test';
    private $password = 'Zhyar8891@@';
    private $dbname = 'webproject_test';



    public function connect()
    {
        $mysql_connect = "mysql:host=$this->host;dbname=$this->dbname";
        $dbConnection = new PDO($mysql_connect,$this->user,$this->password);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return $dbConnection;
    }
}


?>