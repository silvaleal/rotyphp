# Delete

Executa a exclusão de registros no banco de dados. Este método utiliza internamente o `del()` do `QueryBuilder` para montar a query e `builder()` para finalizar a instrução.

## Parâmetros
- `array $data`: Array associativo com os critérios de exclusão. Cada chave representa uma coluna e cada valor representa o valor esperado para a cláusula `WHERE`.

## Retorno
- `bool`: Retorna `true` quando a exclusão for executada com sucesso e `false` em caso de falha.

## Exemplo de uso
```php
$model = new Model('users');

$conditions = [
    'id' => 123
];

$success = $model->delete($conditions);

if ($success) {
    echo "Usuário excluído com sucesso!";
}
```

> Importante: o método `delete()` depende da forma como o `QueryBuilder` monta a cláusula `WHERE`. Verifique se os valores passados estão corretos para evitar exclusões inesperadas.
