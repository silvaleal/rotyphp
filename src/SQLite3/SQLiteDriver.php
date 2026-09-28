<?php

namespace RotyPHP\SQLite3;

use PDO;
use RotyPHP\Driver;

class SQLiteDriver extends Driver
{
    protected static $code;

    public static function define(string $code)
    {
        self::$code = $code;
    }

    public static function getPDO(): PDO
    {
        return new PDO("sqlite:".self::$code);
    }

}