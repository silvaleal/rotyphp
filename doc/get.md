# Get

Executa a consulta `SELECT` previamente montada pelo construtor de consultas e retorna todos os registros correspondentes.

## Retorno
- `array`: Retorna um array multidimensional associativo (`PDO::FETCH_ASSOC`) com os registros encontrados. Retorna um array vazio se nada for encontrado.

## Exemplo de uso
```php
$model = new Model('users');

// Busca todos os usuários com papel de 'admin'
$users = $model->select()->where('role', 'admin')->get();

foreach ($users as $user) {
    echo "Nome: " . $user['name'] . "\n";
}
```
