<?php

namespace Src;

class QueryBuilder
{
    protected string $query;
    protected string $type; # insert, select, update, delete...
    protected array $data;
    protected array $wheres;
    protected ?int $limit;
    protected string $table;
    protected string $columns = '*';

    public function builder()
    {
        $result = "";
        $result .= $this->query;

        $wheres = [];
        // TODO: verificar se é string ou número
        foreach ($this->wheres as $key => $value) {
            $wheres[] = "{$key} = '{$value}'";
        }

        $result .= ' WHERE '.implode(' AND ', $wheres);

        $this->query = $result;
        return $this->query;
    }

    public function select(string $columns = '*')
    {
        $this->columns = $columns;
        $this->type = "select";
        $this->query = "SELECT {$this->columns} FROM {$this->table}";
        return $this;
    }

    public function insert(array $data)
    {
        $columns = [];
        $values = [];
        $results = [];

        foreach ($data as $key => $value) {
            $columns[] = $key;
            $values[] = ":{$key}";
            $results[":{$key}"] = $value;
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        
        $this->type = "insert";
        $this->query = "INSERT INTO {$this->table} (" . $columns . ") VALUES (" . $values . ")";
        $this->data["inserters"] = $results;
        return $this;
    }

    public function where(string $column, string $value)
    {
        $this->wheres[$column] = $value;
        return $this;
    }
}
