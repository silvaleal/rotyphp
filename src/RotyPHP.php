<?php

namespace RotyPHP;

use Exception;
use RotyPHP\MySQL\MySQLDriver;
use RotyPHP\SQLite3\SQLiteDriver;

class RotyPHP
{
    public static ?string $driver;

    public static array $valids_drivers = [

        "sqlite" => SQLiteDriver::class,
        "mysql" => MySQLDriver::class
    ];

    public static function setDriver(string $name)
    {

        if (!array_key_exists($name, self::$valids_drivers)) {
            throw new Exception("Driver not valid");
        }

        self::$driver = $name;

    }
    public static function getConnector()
    {
        return (self::$valids_drivers[self::$driver])::getPDO();
    }
}