# Create

Executa a inserção de um novo registro diretamente no banco de dados. Este método utiliza internamente o `insert()` do `QueryBuilder` para montar a query de forma segura usando prepared statements.

## Parâmetros
- `array $data`: Array associativo com os dados a serem inseridos, onde a chave é a coluna e o valor é o dado.

## Retorno
- `bool`: Retorna `true` em caso de sucesso na execução e `false` caso ocorra alguma falha.

## Exemplo de uso
```php
$model = new Model('users');

$data = [
    'name' => 'João Silva',
    'role' => 'user'
];

$success = $model->create($data);

if ($success) {
    echo "Usuário criado com sucesso!";
}
```
