<?php 

namespace RotyPHP\SQLite3;

use RotyPHP\Migration;

class SQLiteMigration extends Migration {
    protected ?string $_varchar = "VARCHAR";
    protected ?string $_text = "TEXT";
    protected ?string $_int = "INTEGER";
    protected ?string $_bigint = "BIGINT";
    protected ?string $_float = "FLOAT";
    protected ?string $_bool = "VARCHAR";
    protected ?string $_primKey = "PRIMARY KEY";
    protected ?string $_autoinc = "AUTOINCREMENT";
}
