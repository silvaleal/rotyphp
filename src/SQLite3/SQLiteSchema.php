<?php 

namespace RotyPHP\SQLite3;

use RotyPHP\Schema;

class SQLiteSchema extends Schema {
    protected ?string $_varchar = "VARCHAR";
    protected ?string $_text = "TEXT";
    protected ?string $_int = "INTEGER";
    protected ?string $_bigint = "BIGINT";
    protected ?string $_float = "FLOAT";
    protected ?string $_bool = "BOOLEAN";
    protected ?string $_datetime = "DATETIME";
    protected ?string $_primKey = "PRIMARY KEY";
    protected ?string $_autoinc = "AUTOINCREMENT";
}
