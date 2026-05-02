# 🐘 RotyPHP

[![PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg)](https://php.net/)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

**RotyPHP** é um micro-ORM e Query Builder minimalista, simples e eficiente, construído em PHP para facilitar as interações com bancos de dados SQLite usando PDO. O foco é fornecer uma sintaxe limpa e fluente, abstraindo queries SQL para operações rotineiras.

---

## 🚀 Instalação

1. Clone o repositório para o seu ambiente:
   ```bash
   git clone https://github.com/silvaleal/rotyphp.git
   cd rotyphp
   ```

2. Gere o autoload do Composer para carregar as classes via PSR-4:
   ```bash
   composer dump-autoload
   ```

3. Pronto! O banco de dados SQLite (`database.db`) será utilizado ou gerado automaticamente na raiz do projeto na primeira interação.

---

## 💡 Exemplos de Uso

Abaixo estão os cenários mais comuns de uso do ORM.

### Inicializando um Modelo
Instancie o modelo passando o nome da tabela que deseja manipular.

```php
require __DIR__."/vendor/autoload.php";

use Src\Model;

// Conecta-se à tabela 'users'
$model = new Model("users");
```

### Inserindo Dados
Use o método `create` com um array associativo para inserir registros.

```php
$data = [
    "name" => "João Silva",
    "role" => "admin"
];

if ($model->create($data)) {
    echo "Usuário criado com sucesso!";
}
```

### Consultando Dados
Encadeie métodos de forma fluente para buscar registros.

**Buscando vários registros (`get`):**
```php
$admins = $model->select('name, email')
                ->where('role', 'admin')
                ->get();
```

**Buscando um único registro (`first`):**
```php
$user = $model->select()
              ->where('email', 'contato@silvaleal.dev')
              ->first();
```

---

## 📝 To-Do List (Tarefas Futuras)

- [x] Conexão com SQLite via PDO
- [x] Método `select()`
- [x] Método `insert()` e `create()`
- [x] Cláusula `where()` básica
- [x] Retorno com `get()` e `first()`
- [x] Implementar método `update()`
- [ ] Implementar método `delete()`
- [ ] Melhorar `where()` (suporte a `>`, `<`, `LIKE`, etc.)
- [ ] Implementar suporte a `limit()` e `orderBy()`
- [ ] Tratamento avançado de exceções
- [ ] Adicionar suporte ao Dotenv para configurações do DB

---

**Desenvolvido por:** [silvaleal](https://silvaleal.dev)
