# Select

Inicia uma consulta do tipo `SELECT`. Define quais colunas da tabela serão retornadas na query final.

## Parâmetros
- `string $columns` (opcional): Especifica as colunas separadas por vírgula. O valor padrão é `*` (todas as colunas).

## Retorno
- `self`: Retorna a própria instância do `QueryBuilder` (ou `Model`), permitindo o encadeamento fluente de métodos (ex: `->where()->get()`).

## Exemplo de uso
```php
$model = new Model('users');

// Seleciona todas as colunas
$model->select()->get();

// Seleciona colunas específicas
$model->select('id, name, email')->get();
```
