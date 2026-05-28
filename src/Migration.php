<?php

namespace RotyPHP;

class Migration
{
    public string $table;
    public string $column;
    protected array $data = [];

    protected ?string $_varchar;
    protected ?string $_text;
    protected ?string $_int;
    protected ?string $_bigint;
    protected ?string $_float;
    protected ?string $_bool;
    protected ?string $_datetime;
    protected ?string $_primKey;
    protected ?string $_autoinc;


    public function varchar(string $column, int $length)
    {
        $this->content($column, $this->_varchar, $length);
        return $this;
    }


    public function text(string $column)
    {
        $this->content($column, $this->_text);
        return $this;
    }

    public function int(string $column)
    {
        $this->content($column, $this->_int);
        return $this;
    }

    public function bigint(string $column)
    {
        $this->content($column, $this->_bigint);
        return $this;
    }

    public function float(string $column)
    {
        $this->content($column, $this->_float);
        return $this;
    }

    public function bool(string $column)
    {
        $this->content($column, $this->_bool);
        return $this;
    }
    public function datetime(string $column) {
        $this->content($column, $this->_datetime);
        return $this;
    }

    public function default(string $value)
    {
        $this->data[$this->column] .= " DEFAULT '{$value}'";
        return $this;
    }

    public function defaultRaw(string $expression)
    {
        $this->data[$this->column] .= " DEFAULT " . trim($expression);
        return $this;
    }

    public function primKey()
    {
        $this->data[$this->column] .= " {$this->_primKey}";
        return $this;
    }
    public function autoinc()
    {
        $this->data[$this->column] .= " {$this->_autoinc}";
        return $this;
    }

    public function unique() {
        $this->data[$this->column] .= " UNIQUE";
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
