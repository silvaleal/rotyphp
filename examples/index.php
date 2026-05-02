<?php 

require __DIR__ . '/../vendor/autoload.php';

use RotyPHP\Database;
use RotyPHP\Model;

Database::setConnector(__DIR__."/../database.db");

$user = new Model("users");

// $user->create(["name" => "roty"]);

$user->select();
print_r($user->get());
