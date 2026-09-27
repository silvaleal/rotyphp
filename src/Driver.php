<?php

namespace RotyPHP;

use Exception;
use PDO;

abstract class Driver
{
    public function getPDO(): PDO
    {
        throw new Exception("PDO not implemented.");
    }

}