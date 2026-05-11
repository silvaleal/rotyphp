<?php

namespace RotyPHP;

class Migration
{
    public string $table;
    public string $column;
    protected array $data = [];


    public function varchar(string $column, int $length)
    {
        $this->content($column, 'VARCHAR', $length);
        return $this;
    }


    public function text(string $column)
    {
        $this->content($column, 'TEXT');
        return $this;
    }

    public function int(string $column)
    {
        $this->content($column, 'INT');
        return $this;
    }

    public function bigint(string $column)
    {
        $this->content($column, 'BIGINT');
        return $this;
    }

    public function float(string $column)
    {
        $this->content($column, 'FLOAT');
        return $this;
    }

    public function bool(string $column)
    {
        $this->content($column, 'BOOL');
        return $this;
    }

    public function default(string $value)
    {
        $this->data[$this->column] .= " DEFAULT '{$value}'";
        return $this;
    }

    public function primKey()
    {
        $this->data[$this->column] .= " PRIMARY KEY";
        return $this;
    }
    public function autoinc()
    {
        $this->data[$this->column] .= " AUTOINCREMENT";
        return $this;
    }

    private function content(string $column, string $value, ?int $size = null)
    {

        $this->data[$column] = $size ? "$value($size)" : $value;
        $this->column = $column;
    }

    public function build()
    {
        $query = "CREATE TABLE IF NOT EXISTS $this->table (!columns!)";

        $columns = [];

        foreach ($this->data as $key => $column) {
            $columns[] = "$key $column";
        }

        $columns = implode(', ', $columns);

        return str_replace('!columns!', $columns, $query);
    }

}