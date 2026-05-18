# Edit

Executa a atualização de um registro no banco de dados. Este método utiliza internamente o `update()` do `QueryBuilder` para montar a query e `builder()` para finalizar a instrução.

## Parâmetros
- `array $data`: Array associativo com os dados a serem atualizados. Deve conter as colunas e valores que serão usados na cláusula `SET` e também as colunas para a cláusula `WHERE`, caso o `QueryBuilder` esteja configurado para isso.

## Retorno
- `bool`: Retorna `true` em caso de sucesso na execução e `false` caso ocorra alguma falha.

## Exemplo de uso
```php
$model = new Model('users');

$data = [
    'name' => 'Maria Souza',
    'role' => 'editor'
];

$success = $model->edit($data);

if ($success) {
    echo "Usuário atualizado com sucesso!";
}
```

> Nota: dependendo da implementação do `QueryBuilder`, a cláusula `WHERE` pode ser gerada automaticamente a partir dos dados passados ou pode exigir chamadas adicionais antes de `edit()`.
