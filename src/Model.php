<?php 

namespace RotyPHP;

use PDO;

class Model extends QueryBuilder {
    public ?string $table;
    protected array $data = [];
    protected PDO $pdo;

    public function __construct() {
        $this->pdo = Database::conn();
    }

    public function create(array $data)
    {
        $this->insert($data);

        $stmt = $this->pdo->prepare($this->query);
        $result = $stmt->execute($this->data["inserters"]);

        return $result;
    }

    public function edit(array $data) {
        $this->update($data);
        $this->builder();

        $stmt = $this->pdo->prepare($this->query);
        $result = $stmt->execute($this->data["updaters"]);

        return $result;
    }
    
    public function delete(array $data) { // TODO: criar para name = :name
        $this->del($data);
        $this->builder();

        $stmt = $this->pdo->prepare($this->query);
        $result = $stmt->execute($this->data["deletories"]);

        return $result;
    }

    public function get()
    {
        $this->builder();

        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function first() {
        $this->builder();

        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}