<?php

namespace RotyPHP\MySQL;

use PDO;
use RotyPHP\Driver;

class MySQLDriver extends Driver
{
    public string $host;
    public string $database;
    public string $username;
    public string $password;

    public function __construct(string $host, string $username, string $password, string $database)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

    public function getPDO(): PDO
    {
        return new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
    }

}