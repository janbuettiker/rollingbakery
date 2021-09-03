<?php

class Dbh
{

    private $host = "db";
    private $user = "root";
    private $pass = "1234";
    private $dbName = "bakery";

    protected function connect()
    {

        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
