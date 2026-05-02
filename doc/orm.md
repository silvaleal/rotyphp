# RotyPHP ORM

Um micro-ORM (Object-Relational Mapping) e Query Builder simples e eficiente construído em PHP para facilitar interações com banco de dados SQLite usando PDO.

## Como Usar

O `RotyPHP` foi projetado para ser muito simples de usar. Abaixo estão os exemplos principais de como interagir com o banco de dados.

### 1. Inicializando um Modelo

Para interagir com uma tabela, instancie a classe `Model` passando o nome da tabela no construtor.

```php
require __DIR__."/vendor/autoload.php";

use Src\Model;

// Inicializa o modelo para a tabela 'users'
$model = new Model("users");
```

### 2. Inserindo Dados (`create`)

O método `create` insere um novo registro na tabela e executa a ação imediatamente no banco.

```php
$data = [
    "name" => "João Silva",
    "role" => "admin"
];

$result = $model->create($data); // Retorna true ou false
```

### 3. Consultando Dados (`select`, `where`, `get`, `first`)

O construtor de consultas permite encadear métodos de forma fluente.

**Buscando vários registros:**
```php
$users = $model->select()->where("role", "user")->get();
print_r($users); // Retorna um array associativo com os resultados
```

**Buscando um único registro:**
```php
$user = $model->select('name, role')->where("name", "João Silva")->first();
print_r($user); // Retorna apenas a primeira linha correspondente ou false
```
**Autor:** silvaleal ([portfolio](https://silvaleal.dev))