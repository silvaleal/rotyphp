<?php

namespace RotyPHP;

abstract class Driver
{
    public static function getPDO(): \PDO
    {
        throw new \Exception('PDO not implemented.');
    }
}
