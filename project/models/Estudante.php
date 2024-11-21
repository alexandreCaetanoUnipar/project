<?php
class Estudante {
private $collection;

public function __construct() {
    global $database;
    $this->collection = $database->selectCollection('estudantes');
}

public function cadastrar($dados) {
    $this->collection->insertOne($dados);
}

public function listar() {
    return $this->collection->find();
}

}
?>