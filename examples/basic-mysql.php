<?php

require __DIR__ . "/../vendor/autoload.php";

use RotyPHP\Model;
use RotyPHP\RotyDatabase;

use RotyPHP\MySQL\MySQLDriver;
use RotyPHP\RotyDriver;

# Obrigatório
# É com este código que o rotyphp identifica qual banco de dados deseja usar

RotyDriver::setName("sqlite");

MySQLDriver::define(
    "localhost",
    "root",
    "102030",
    "panel"
);

RotyDatabase::setConnector(RotyDriver::getDriver());

# Criando nosso Model.
class User extends Model {
    public ?string $table = "users";
}

$user = new User();

$user->where("id", 1);

var_dump($user->getFirst());