<?php

namespace RotyPHP;

use RotyPHP\MySQL\MySQLDriver;
use RotyPHP\SQLite3\SQLiteDriver;

class RotyDriver
{
    protected static string $name;

    public static function setName(string $name)
    {
        self::$name = $name;
    }
    public static function getName()
    {
        return self::$name;
    }

    public static function getDriver()
    {
        switch (self::$name) {
            case 'sqlite':
                $database = SQLiteDriver::getPDO();
                break;

            case 'mysql':
                $database = MySQLDriver::getPDO();
                break;

            default:
                $database = null;
                break;
        }

        return $database;
    }
}