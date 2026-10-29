<?php

use RotyPHP\Schema;
use RotyPHP\SQLite3\SQLiteSchema;


test("schema", function () {
    $mig = new SQLiteSchema();
    $mig->table = "example";

    $mig->varchar("title", 45);
    $mig->int("age");


    expect($mig->build())->toBe("CREATE TABLE IF NOT EXISTS example (title VARCHAR(45), age INTEGER)");

});