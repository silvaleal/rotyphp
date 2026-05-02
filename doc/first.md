# First

Executa a consulta `SELECT` e retorna apenas o **primeiro** registro correspondente encontrado no banco de dados.

## Retorno
- `array|false`: Retorna um array associativo contendo os dados da primeira linha ou `false` se nenhum registro for correspondente.

## Exemplo de uso
```php
$model = new Model('users');

// Busca o primeiro usuário chamado 'Maria'
$user = $model->select('id, name, email')->where('name', 'Maria')->first();

if ($user) {
    echo "E-mail da Maria: " . $user['email'];
} else {
    echo "Usuário não encontrado.";
}
```
