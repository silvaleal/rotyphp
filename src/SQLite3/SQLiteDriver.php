<?php

namespace RotyPHP\SQLite3;

use PDO;
use RotyPHP\abstracts\Driver;

class SQLiteDriver extends Driver
{
    public string $name = 'sqlite';
    public string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function getPDO(): PDO
    {
        return new PDO("$this->name:$this->code");
    }

}