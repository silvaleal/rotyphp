<?php

namespace RotyPHP;

use Exception;
use PDO;
use RotyQuery\QueryBuilder;

class Model extends QueryBuilder
{
    public ?string $table;
    protected array $data = [];
    protected ?PDO $pdo;

    public function __construct()
    {
        try {
            $result = $this->pdo = Database::conn();
            if (!$result) {
                throw new Exception("Invalid database config.");
            }
        } catch (Exception $e) {
            throw new Exception("Error connecting to database: " . $e->getMessage());
        }
    }

    public function create(array $data)
    {
        $this->q_insert($data);

        $stmt = $this->pdo->prepare($this->query);
        $result = $stmt->execute($this->data["inserters"]);

        return $result;
    }

    public function edit(array $data)
    {
        $this->q_update($data);
        $this->q_builder();

        $stmt = $this->pdo->prepare($this->query);
        $result = $stmt->execute($this->data["updaters"]);

        return $result;
    }

    public function delete(array $data)
    {
        $this->q_del($data);
        $this->q_builder();

        $stmt = $this->pdo->prepare($this->query);
        $result = $stmt->execute($this->data["deletories"]);

        return $result;
    }

    public function where(string $column, int|string $value)
    {
        $this->q_where($column, $value);
        return $this;
    }

    public function join(string $table, string $key, string $field)
    {
        $this->q_join($table, $key, $field);
        return $this;
    }

    public function getAll(string $columns = '*')
    {
        if (!$this->type) {
            $this->q_select($columns);
        }
        $this->q_builder();

        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getFirst(string $columns = '*')
    {
        if ($this->query === '' || stripos(ltrim($this->query), 'SELECT') !== 0) {
            $this->q_select($columns);
        }
        $this->q_builder();

        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
