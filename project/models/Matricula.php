<?php
class Matricula {
private $collection;

public function __construct() {
    global $database;
    $this->collection = $database->selectCollection('matriculas');
}

public function cadastrar($dados) {
    $this->collection->insertOne($dados);
}

public function listar() {
    return $this->collection->find();
}

}
?>