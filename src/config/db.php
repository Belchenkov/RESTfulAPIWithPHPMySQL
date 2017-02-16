<?php


class DB
{
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'restslimapp';
    private $dbh;

    //Connect
    public function connect()
    {
        $mysql_connect_str = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;
        $this->dbh = new \PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $this->dbh;
    }

    public function __construct()
    {
        echo 'This is call Construct of ' . __CLASS__. ' class';
    }
}