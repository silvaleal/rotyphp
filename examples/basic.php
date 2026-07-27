<?php

require __DIR__."/../vendor/autoload.php";

use RotyPHP\RotyDatabase;
use RotyPHP\SQLite3\SQLiteDriver;
use RotyPHP\SQLite3\SQLiteModel;
 
# Obrigatório
# É com este código que o rotyphp identifica qual banco de dados deseja usar
$driver = new SQLiteDriver(__DIR__."/../database2.db");
RotyDatabase::setConnector($driver);

# Criando nosso Model.
class User extends SQLiteModel {
    public ?string $table = "users";
}