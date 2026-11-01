<?php

namespace RotyPHP;

use RotyQuery\ModelBase;

class Model extends ModelBase
{
    public ?string $table;
    protected array $data = [];
    protected ?\PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = RotyPHP::getConnector();

            if (!$this->pdo) {
                throw new \Exception('Invalid database config.');
            }
        } catch (\Exception $e) {
            throw new \Exception('Error connecting to database: '.$e->getMessage());
        }
    }

    public function create(array $data)
    {
        $this->q_insert($data);

        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute($this->data['inserters']);

        return $this->pdo->lastInsertId();
    }

    public function edit(array $data)
    {
        $this->q_update($data);
        $this->q_builder();

        $stmt = $this->pdo->prepare($this->query);

        return $stmt->execute($this->data['updaters']);
    }

    public function delete(array $data)
    {
        $this->q_del($data);
        $this->q_builder();

        $stmt = $this->pdo->prepare($this->query);

        return $stmt->execute($this->data['deletories']);
    }

    public function where(string $column, int|string $value, string $symbol = '=')
    {
        $this->q_where($column, $value, $symbol);

        return $this;
    }

    public function join(string $table, string $key, string $field)
    {
        $this->q_join($table, $key, $field);

        return $this;
    }

    public function order(string $column, string $order = 'ASC')
    {
        $this->q_order($column, $order);

        return $this;
    }

    public function limit(int $limit)
    {
        $this->q_limit($limit);

        return $this;
    }

    public function getAll(string $columns = '*')
    {
        if (!$this->type) {
            $this->q_select($columns);
        }
        $query = $this->q_builder();

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($this->data['wheres'] ?? []);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getFirst(string $columns = '*')
    {
        if ('' === $this->query || 0 !== stripos(ltrim($this->query), 'SELECT')) {
            $this->q_select($columns);
        }
        $query = $this->q_builder();

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($this->data['wheres'] ?? []);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
