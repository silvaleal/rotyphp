# RotyPHP

![Packagist Version](https://img.shields.io/packagist/v/silvaleal/rotyphp?style=for-the-badge)
![Packagist Downloads](https://img.shields.io/packagist/dt/silvaleal/rotyphp?style=for-the-badge)

**RotyPHP** é um micro-ORM e Query Builder minimalista, simples e eficiente, construído em PHP para facilitar as interações com bancos de dados SQLite usando PDO. O foco é fornecer uma sintaxe limpa e fluente, abstraindo queries SQL para operações rotineiras.

> **Aviso:** Este projeto ainda está em fase de desenvolvimento (ver *To-Do List*). Não é recomendado para uso em produção crítica no momento.

## Instalação

```bash
composer require silvaleal/rotyphp
```

## Configuração

Antes de utilizar o RotyPHP, é obrigatório configurar o método `setConnector` da classe `Database` logo no início da sua aplicação:

```php
<?php 

require 'vendor/autoload.php';

use RotyPHP\Database;
use RotyPHP\Model;

Database::setConnector(__DIR__."/../database.db");

class User extends SQLiteModel {
    public ?string $table = "users";
}

$model = new User();

$a = $model->select()->get();

print_r($a);
```

## Documentação

Leia a nossa documentação em [/doc](/doc/).

## To-Do List (Tarefas Futuras)

- [x] Conexão com SQLite via PDO
- [x] Método `select()`
- [x] Método `insert()` e `create()`
- [x] Cláusula `where()` básica
- [x] Retorno com `get()` e `first()`
- [x] Implementar método `update()`
- [x] Implementar método `delete()`
- [ ] Melhorar `where()` (suporte a `>`, `<`, `LIKE`, etc.)
- [ ] Implementar suporte a `limit()` e `orderBy()`
- [ ] Implementar método `unique()`
- [ ] Implementar método `datetime()`
