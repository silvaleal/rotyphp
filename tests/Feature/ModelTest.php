<?php

use RotyPHP\Model;
use RotyPHP\RotyDatabase;
use RotyPHP\RotyDriver;
use RotyPHP\SQLite3\SQLiteDriver;

beforeEach(function () {
    RotyDriver::setName('sqlite');
    SQLiteDriver::define(__DIR__.'/../../database.db');
    RotyDatabase::setConnector(RotyDriver::getDriver());
});

test('criando usuário', function () {
    $user = new Model();
    $user->table = 'users';

    $user->create(['id' => 12300, 'isVip' => 1]);
});

test('editando usuário', function () {
    $user = new Model();
    $user->table = 'users';

    $user->where('id', 12300)->edit(['isVip' => 0]);
});

test('deletando usuário', function () {
    $user = new Model();
    $user->table = 'users';

    $user->delete(['id' => 12300]);
});
