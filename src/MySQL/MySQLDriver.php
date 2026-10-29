<?php

namespace RotyPHP\MySQL;

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

    public static function getPDO(): \PDO
    {
        $dsn = 'mysql:host='.self::$host.';dbname='.self::$database;

        return new \PDO(
            $dsn,
            self::$username,
            self::$password,
            [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            ]
        );
    }
}
