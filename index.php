<?php

require 'vendor/autoload.php';

use RotyPHP\Database;
use RotyPHP\Model;
use RotyPHP\QueryBuilder;

Database::setConnector(__DIR__."/database.db");

// $query = new QueryBuilder();

// $query->setTable("9sers");

// $query->insert([
//     "name"=> 'silvaleal',
//     "email"=> 'eeeee@email.com'
// ]);

// print_r($query->getQuery());


$model = new Model();

$model->table = "users";

print_r($model->getAll());  
