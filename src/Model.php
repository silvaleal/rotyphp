<?php 

namespace RotyPHP;

use Exception;
use PDO;

class Model extends QueryBuilder {
    public ?string $table;
    protected array $data = [];
    protected ?PDO $pdo;

    public function __construct() {
        try {
            $this->pdo = Database::conn();
        } catch (Exception $e) {
            echo "Error connecting to database: " . $e->getMessage();
        }
    }

    public function create(array $data)
    {
        if (!isset($this->pdo)) return;
        $this->insert($data);

        $stmt = $this->pdo->prepare($this->query);
        $result = $stmt->execute($this->data["inserters"]);

        return $result;
    }

    public function edit(array $data) {
        if (!isset($this->pdo)) return;
        $this->update($data);
        $this->builder();

        $stmt = $this->pdo->prepare($this->query);
        $result = $stmt->execute($this->data["updaters"]);

        return $result;
    }
    
    public function delete(array $data) { // TODO: criar para name = :name
        if (!isset($this->pdo)) return;
        $this->del($data);
        $this->builder();

        $stmt = $this->pdo->prepare($this->query);
        $result = $stmt->execute($this->data["deletories"]);

        return $result;
    }

    public function getAll(string $columns = '*')
    {
        if (!isset($this->pdo)) return;

        $this->select($columns);
        $this->builder();

        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getFirst(string $columns = '*') {
        if (!isset($this->pdo)) return;
        
        $this->select($columns);
        $this->builder();

        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}