<?php

require __DIR__."/../vendor/autoload.php";

use RotyPHP\Model;
use RotyPHP\RotyDatabase;

use RotyPHP\SQLite3\SQLiteDriver;
 
# Obrigatório
# É com este código que o rotyphp identifica qual banco de dados deseja usar
$driver = new SQLiteDriver(__DIR__."/../database.db");
RotyDatabase::setConnector($driver);

# Criando nosso Model.
class User extends Model {
    public ?string $table = "users";
}

$user = new User();

$user->where("id", 1);

var_dump($user->getFirst());