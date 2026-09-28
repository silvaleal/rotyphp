<?php

namespace RotyPHP\MySQL;

use PDO;
use RotyPHP\Driver;

class MySQLDriver extends Driver
{
    public static string $host;
    public static string $database;
    public static string $username;
    public static string $password;

    public static function define(
        string $host,
        string $username,
        string $password,
        string $database
    ) {
        self::$host = $host;
        self::$username = $username;
        self::$password = $password;
        self::$database = $database;
    }

    public static function getPDO(): PDO
    {
        return new PDO("mysql:host=" . self::$host . ";dbname=" . self::$database, self::$username, self::$password);
    }

}