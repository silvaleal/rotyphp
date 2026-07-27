<?php

namespace RotyPHP\abstracts;

use Exception;
use PDO;

abstract class Driver
{
    public string $name;
    public string $code;

    public function getPDO(): PDO
    {
        throw new Exception("PDO not implemented.");
    }

}