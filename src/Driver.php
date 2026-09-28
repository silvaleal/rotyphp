<?php

namespace RotyPHP;

use Exception;
use PDO;

abstract class Driver
{
    public static function getPDO(): PDO
    {
        throw new Exception("PDO not implemented.");
    }

}