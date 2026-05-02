<?php

require __DIR__."/vendor/autoload.php";

use Src\Model;

$data = [
    "name"=>"client",
    "role"=>"user"
];

$model = new Model("users");
// $result = $model->create($data);
// $result = $model->select()->where("role", 'user')->get();
// $result = $model->where("name", "edited")->edit(["name"=>"silvaleal", "role"=>'default']);

// $model->insert($data);
